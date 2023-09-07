import mysql.connector

bdd = mysql.connector.connect(host="localhost", user="root", password="", database="la_cite_collegiale")

curseur = bdd.cursor()

#### Inserer un element
# prenom = "Nick"
# date_embauche = "2023-07-28"
# curseur.execute("INSERT INTO professeur(prenom, date_embauche) VALUES(%s, %s)", [prenom, date_embauche])

#### Inserer plusieurs element en meme temps
# data = [
#     ("Ariane", "2023-02-14"),
#     ("Kamga", "2023-01-20")

# ]
# requette = ("INSERT INTO professeur(prenom, date_embauche) VALUES(%s, %s)")
# curseur.executemany(requette, data)

#### Requette SELECT
query = "SELECT * FROM professeur"
curseur.execute(query)
result = curseur.fetchall()
for donnees in result:
    print(donnees)

for donnees in result:
    for 
#### Requette UPDATE
# nouveau_nom = "Queen"
# curseur.execute("UPDATE professeur SET prenom = %s WHERE date_embauche <= '2017-01-01' ", [nouveau_nom])


bdd.commit()