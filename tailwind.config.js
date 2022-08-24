/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily : {
        body : ['Mochiy Pop One'],
        bod : ['Mochiy Pop One'],
        bo : ['Mochiy Pop One']
      },
      backgroundImage: {
        'hero': "url('/public/images/bg.jpg')",
        'footer-texture': "url('/img/footer-texture.png')",
      }
    },
  },
  plugins: [],
}
