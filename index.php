
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Page d'accueil du garage automobile V.Parrot à Toulouse avec des témoignages clients">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V.Parrot</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <style>
        h2 {
            text-align: center;
            margin: 12px;
            padding: 12px;
            background-color: #FFFF00; /* Ajout de la couleur en hexadécimal */
        }
        p {
            text-align: left;
            background-color: #FFFF00; /* Ajout de la couleur en hexadécimal */
        }
        .yellowcase {
            background-color: #FFFF00; /* Ajout de la couleur en hexadécimal */
        }
        @media (max-width: 768px) {
            h2 {
                font-size: 1.5em;
            }
            p {
                font-size: 1em;
            }
        }
        
        @media (max-width: 576px) {
            h2 {
                font-size: 1.2em;
            }
            p {
                font-size: 0.9em;
            }
            form {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <center>
    <?php include 'logo V.Parrot.php'; ?> <!-- Correction de la balise PHP -->
    </center>
    <?php include 'menu.php'; ?>

    <div class="yellowcase">
        <h2>Qui sommes-nous?</h2>
        <p>Nous sommes un garage basé à Toulouse attaché à offrir un service de qualité à ses clients</p>
    </div>

    <h1>Témoignages</h1>

    <?php include "script_temoignages.php"; ?>

    <h3>Laisser un témoignage</h3>

    <form action="traitement.php" method="post">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required><br>

        <label for="email">Adresse e-mail :</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="message">Message :</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br>

        <input type="submit" value="Envoyer">
    </form>

    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>
</html>
