<?php
// Chemin vers le fichier JSON des témoignages
$fichier_json = 'temoignages.json';

// Lire le contenu du fichier JSON
$donnees_json = file_get_contents('admin.temoignage.json');

// Convertir le JSON en tableau associatif
$donnees = json_decode($donnees_json, true);

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$message = $_POST['message'];
$date = date('Y-m-d'); // Date actuelle

// Créer un nouveau témoignage
$nouveau_temoignage = array(
    'nom' => $nom,
    'message' => $message,
    'date' => $date
);

// Ajouter le nouveau témoignage au tableau de données
$donnees['temoignages'][] = $nouveau_temoignage;

// Réécrire le fichier JSON avec les données mises à jour
file_put_contents($fichier_json, json_encode($donnees));

// Afficher les témoignages
foreach ($donnees['temoignages'] as $temoignage) {
    echo "<div>";
    echo "<h3>" . $temoignage['nom'] . "</h3>";
    echo "<p>" . $temoignage['message'] . "</p>";
    echo "<p>Date: " . $temoignage['date'] . "</p>";
    echo "</div>";
}
?>

