<?php  
// Inclure la connexion à la base de données
include('db.php');

// Récupérer les données envoyées par le formulaire
$nom = $_POST['nom']; 
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse']; 
$date_naissance = $_POST['date_naissance'];

// Préparer la requête d'insertion
$sql = "INSERT INTO client (nom, prenom, email, telephone, adresse, date_naissance) 
        VALUES ('$nom', '$prenom', '$email', '$telephone', '$adresse', '$date_naissance')";

// Exécuter la requête et vérifier si l'insertion a réussi
if (mysqli_query($conn, $sql)) {
    echo "Données enregistrées avec succès !";
} else {
    echo "Erreur : " . mysqli_error($conn);
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
