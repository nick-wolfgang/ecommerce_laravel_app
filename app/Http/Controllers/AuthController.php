<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function getLogin()
    {
        return view('auth.login');
    }
    public function postLogin(Request $req)
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $test_login = false;

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $user = User::query()->where("email", $req->email)->first();
            if(!$user) {
                return redirect()->back()->withErrors(['email' => 'User does not exist']);
            }
            if(!Hash::check($req->password, $user->password)){
                return redirect()->back()->withErrors(['password' => 'Invalid Credentials']);
            }
            Auth::login($user, $req->remember);
            if($user->admin)
                return redirect()->intended('/admin')->with('status', 'Welcome To Your Dashboard');
            return redirect()->intended(RouteServiceProvider::HOME)->with('status', 'Logged in successfully');
        }
        return view('auth.login', [
            'test_login' => $test_login
        ]);
    }
    public function getRegister()
    {
        return view('auth.register');
    }
    public function postRegister(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'email' => ['required', 'unique:users,email'],
            'password' => ['required', 'min:6']
        ]);

        $user = new User();
        $user->name =$req->name;
        $user->email =$req->email;
        $user->password = Hash::make($req->password);
        $user->admin = false;
        $user->save();

        return $this->postLogin($req);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/products');
    }
}
