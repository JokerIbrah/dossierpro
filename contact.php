<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <meta name="description" content="Page de contact et horaires du garage V.Parrot">
    <link href="style.css" rel="stylesheet" type="text/css">
    <style>
        .horraire {
            text-align: center;
        }
        form {
            text-align: center; 
        }
        label, input, textarea {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <header>
        <?php include 'logo V.Parrot.php'; ?>
        <?php include 'menu.php'; ?>
        <!-- Horaires d'ouverture -->
        <div class="horraire">
            <img src="horraire V.Parrot.png" alt="horaires du garage">
        </div>
        <!-- Formulaire de contact avec l'atelier -->
        <form action="" method="post">
            <label for="nom">Nom :</label><br>
            <input type="text" id="nom" name="nom" required><br>
            <label for="email">Adresse e-mail :</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="message">Message :</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br>
            <input type="submit" value="Envoyer">
        </form>
    </header>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>
</html>
