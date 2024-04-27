<!DOCTYPE html>
<html lang="fr">
<header>
    <metadata>
        <title>menu du site</title>
    </metadata>
</header>
<style>
    .menu {
        list-style-type: none;
        /* Supprime les puces de la liste */
        margin: 0;
        /* Supprime les marges par défaut */
        padding: 0;
        /* Supprime les espaces intérieurs par défaut */
        background-color: red;
        /* Couleur de fond du menu */
    }

    /* Style pour chaque élément du menu */
    .menu li {
        display: inline;
        /* Affiche les éléments côte à côte */
    }

    /* Style pour les liens dans le menu */
    .menu li a {
        display: inline-block;
        /* Permet de définir la largeur des liens */
        padding: 8px 16px;
        /* Ajoute un espace intérieur aux liens */
        text-decoration: none;
        /* Supprime le soulignement par défaut */
        color: black;
        /* Couleur du texte */
    }

    /* Style pour les liens au survol */
    .menu li a:hover {
        background-color: blue;
        /* Couleur de fond au survol */
    }
</style>
<ul class="menu">
    <li>
        <h1>CONTACT</h1>
    </li>
    <li>
        <h1><a href="index.html">ACCEUIL</a></h1>
    </li>
    <!--Une fois que j'aurais mis du PhP on poura changer ca avec la fonction required once-->

    <li>
        <h1><a href="C:\Users\Admin\Downloads\dossier projet\page de boutique.html">VENTE DE VEHICULE</a></h1>
    </li>
</ul>
<p>

</html>