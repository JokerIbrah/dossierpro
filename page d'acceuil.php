    <!DOCTYPE html>
    <html lang="fr">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>menu du site</title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <style>
            .menu {
                list-style-type: none;
                margin: 0;
                padding: 0;
                background-color: #dc3545; /* Couleur de fond du menu */
            }

            .menu li {
                display: inline;
            }

            .menu li a {
                display: inline-block;
                padding: 8px 16px;
                text-decoration: none;
                color: black;
            }

            .menu li a:hover {
                background-color: #007bff; /* Couleur de fond au survol */
            }
        </style>
    </head>
    <body>
        <ul class="menu">
            <li>
                <a href="contact.php">CONTACT</a>
            </li>
            <li>
                <a href="page d'acceuil.php">ACCUEIL</a>
            </li>
            <li>
                <a href="page de boutique.php">VENTE DE VEHICULE</a>
            </li>
        </ul>
    </body>
    </html>