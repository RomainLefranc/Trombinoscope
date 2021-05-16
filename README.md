# Trombinoscope

Présentation du projet :

Le centre de formation souhaite mettre en place un petit site web accessible mobile :
1ere fonctionnalité attendue : le trombinoscope.
On doit bâtir un prototype fonctionnel.



Objectifs du projet :

- Réaliser un mini site web dynamique "from scratch" en PHP
- Tendre vers une architecture professionnelle

Charte graphique : 

![couleur projet](https://user-images.githubusercontent.com/69463293/118407162-7d613300-b690-11eb-8634-1320f0cb63e1.PNG)

Architecture du projet :

Le choix de conception pour cette version dynamique orientée PHP serait d’avoir qu'une porte d’entrée sur
l’application ,ainsi la gestion des sessions et des paramètres devient beaucoup plus simple. Nous allons gérer la
liaison avec la BDD mySQL avec le PDO.
Grâce au PHP et à la méthodologie MVC, l’évolutivité du site sera beaucoup plus simple et l’organisation du site
sera amélioré.Le site sera beaucoup plus sécurisée.
Pour l'évolution du site dans cette version dynamique,les développeurs peuvent créer de nouvelles view,
manager et contrôleur supplémentaire. En terme d’évolutivité le MVC permet d’ajouter des nouvelles
fonctionnalité et page sans devoir repenser complètement l’architecture du site.Ainsi, le site restera stable après
l’ajout d’une grosse fonctionnalité.

Nomenclature :

Tous les controleur se trouvent dans le dossier ”contrôleur” et sera préfixé de “C_” pour simplifier la prise en
main de l'application.
Tous les manager se trouvent dans le dossier “modèle” et sont suffixé de ”_manager”(exemple :
accueil_manager.php).
Tous les view se trouvent dans le dossier “view”, toutes partie includés dans une view se trouvent dans le dossier
portant le nom de la vue et est préfixé par le nom de la vue ( exemple : accueil_header.php).
Tous les assets utilisé (JQuery et Bootstrap) se trouvent dans le dossier “vendor”.
En ce qui concerne les media :
Les images A la une se trouvent dans le dossier media/alaUne, les icônes de sections se trouvent dans le dossier
media/Sections, la règle de nomenclature de l'icône d’une section est :
- sect{code de la section}.png
exemple : sectDWWM2019.png
Les photo d’identités des stagiaires se trouvent dans le dossier media/stagiaires, la règle de nomenclature de la
photo d’identité est :
- sect{code de la section}_{code du stagiaire}.png
exemple : sectDWWM2019_6.png

Arborescence :

![gloomap_8db5a366](https://user-images.githubusercontent.com/69463293/118407190-98cc3e00-b690-11eb-8564-3a5c4cfd0eb5.png)


Tableau passage de parametre :

![tab param](https://user-images.githubusercontent.com/69463293/118407192-9c5fc500-b690-11eb-9e5c-3db4e5d986dd.PNG)


Graphe de dialogue général :

![Graphe de dialogue](https://user-images.githubusercontent.com/69463293/118407197-9f5ab580-b690-11eb-8476-b99cea7777b8.jpg)

Relation BDD :

![relations bdd](https://user-images.githubusercontent.com/69463293/118407201-a386d300-b690-11eb-8f02-6b6fbb8d3f17.PNG)

Done :

- liste de tous les sections et le nombre de stagiaires dans chaque section
- Recherche de stagiaire par l’initiale de leur prenom
- Consulter les informations concernant un stagiaire
- Consulter la liste de stagiaires appartenant à une section
- Injection SQL proof
- Création d’un script SQL au cas où les données ont besoins d'être réinitialisé.
- Les mot de passe sont cryptées côté BDD

To do :

- Utilisation de la POO en couche modèle pour mieux structurer le code
- envoyer des paramètres en POST pour éviter que les utilisateurs modifient l’url
- Améliorer l’UX ( exemple : possibilité de trier les stagiaires par ville)
- Mise en place d’un CRUD pour ajouter/modifier/supprimer un stagiaire
- Mise en place d’un CRUD pour ajouter/modifier/supprimer une section






