<?php
// Charger les données JSON existantes
$donnees_json = file_get_contents('admin.temoignage.json');
$donnees = json_decode($donnees_json, true);

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = date('Y-m-d'); // Date actuelle

// Créer un nouveau témoignage
$nouveau_temoignage = array(
    'id' => count($donnees['temoignages']) + 1, // Générer un nouvel ID
    'nom' => $nom,
    'email' => $email,
    'message' => $message,
    'date' => $date
);

// Ajouter le nouveau témoignage à la base de données
$donnees['temoignages'][] = $nouveau_temoignage;

// Enregistrer les données mises à jour dans le fichier JSON
file_put_contents('donnees.json', json_encode($donnees));

// Rediriger vers la page d'accueil ou une autre page de confirmation
header('Location: index.html');
exit();
?>
