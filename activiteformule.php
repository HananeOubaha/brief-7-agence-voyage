<?php
include('db.php');
 
// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer et valider les données
    $titre = $conn->real_escape_string($_POST['titre']);
    $description = $conn->real_escape_string($_POST['description']);
    $destination = $conn->real_escape_string($_POST['destination']);
    $prix = (float)$_POST['prix'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $places_disponibles = (int)$_POST['places_disponibles'];

    // Insertion des données
    $sql = "INSERT INTO activite (titre, description, destination, prix, date_debut, date_fin, places_disponibles) 
            VALUES ('$titre', '$description', '$destination', $prix, '$date_debut', '$date_fin', $places_disponibles)";

    if ($conn->query($sql) === TRUE) {
        echo "Données enregistrées avec succès !";
    } else {
        echo "Erreur : " . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
} else {
    echo "Méthode non autorisée.";
}
?>
