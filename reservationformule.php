<?php
include('db.php');

// Récupération des données du formulaire
$id_client = $_POST['client'];
$id_activite = $_POST['activite'];
$date_reservation = $_POST['date_reservation'];
$statut = $_POST['statut'];
$mode_paiement = $_POST['paiement'];

// Insertion dans la table reservation
$sql = "INSERT INTO reservation (id_client, id_activite, date_reservation, statut, mode_paiement) 
        VALUES ('$id_client', '$id_activite', '$date_reservation', '$statut', '$mode_paiement')";

// Exécution de la requête
if (mysqli_query($conn, $sql)) {
    echo "Réservation ajoutée avec succès.";
} else {
    echo "Erreur : " . mysqli_error($conn);
}

// Fermeture de la connexion
mysqli_close($conn);
?>
