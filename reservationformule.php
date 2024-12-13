<?php
include('db.php');

// Récupération des données du formulaire
$id_client = $_POST['client'];
$id_activite = $_POST['activite'];
$statut = $_POST['statut'];
$mode_paiement = $_POST['paiement'];

// Insertion dans la table reservation
$sql = "INSERT INTO reservation (id_client, id_activite, statut, mode_paiement) 
        VALUES ('$id_client', '$id_activite', '$statut', '$mode_paiement')";

if ($conn->query($sql) === TRUE) {
    echo "Réservation ajoutée avec succès.";
} else {
    echo "Erreur : " . $conn->error;
}

$conn->close();
?>
