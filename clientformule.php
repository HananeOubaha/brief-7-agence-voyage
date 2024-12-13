<?php  
include('db.php');

$nom = $_POST['nom']; 
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse']; 
$date_naissance = $_POST['date_naissance'];

// Insertion des données dans la table
$sql = "INSERT INTO `client` (nom, prenom, email, telephone, adresse, date_naissance) 
        VALUES ('$nom', '$prenom', '$email', '$telephone', '$adresse', '$date_naissance')";       

if ($conn->query($sql) === TRUE) {
    echo "Données enregistrées avec succès !";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

// Fermeture de la connexion
$conn->close();
?>
