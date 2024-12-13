<?php  
include('db.php'); 

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données envoyées par le formulaire
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $destination = $_POST['destination'];
    $prix = $_POST['prix']; 
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $places_disponibles = $_POST['places_disponibles']; 

    $sql = "INSERT INTO activite (titre, description, destination, prix, date_debut, date_fin, places_disponibles) 
            VALUES ('$titre', '$description', '$destination', $prix, '$date_debut', '$date_fin', $places_disponibles)";

    if (mysqli_query($conn, $sql)) {
        echo "Données enregistrées avec succès !";
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }

    // Fermer la connexion à la base de données
    mysqli_close($conn);
} else {
    echo "Méthode non autorisée.";
}
?>
