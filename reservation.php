<?php
include('db.php');
// Récupération des clients
$sql_clients = "SELECT id_client, CONCAT(nom, ' ', prenom) AS nom_complet FROM client";
$result_clients = $conn->query($sql_clients);
 
// Récupération des activités
$sql_activites = "SELECT id_activite, titre FROM activite";
$result_activites = $conn->query($sql_activites);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Réservation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Mise à jour du formulaire</h1>
        <form action="reservationformule.php" method="POST" class="space-y-6">
            <!-- Sélection du client -->
            <div>
                <label for="client" class="block text-sm font-medium text-gray-700">Nom du client :</label>
                <select name="client" id="client" required class="mt-1 block w-full p-2 border border-gray-300 bg-white rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Sélectionnez un client</option>
                    <?php
                    if ($result_clients->num_rows > 0) {
                        while ($row = $result_clients->fetch_assoc()) {
                            echo "<option value='{$row['id_client']}'>{$row['nom_complet']}</option>";
                        }
                    } else {
                        echo "<option value=''>Aucun client trouvé</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Sélection de l'activité -->
            <div>
                <label for="activite" class="block text-sm font-medium text-gray-700">Activité :</label>
                <select name="activite" id="activite" required class="mt-1 block w-full p-2 border border-gray-300 bg-white rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Sélectionnez une activité</option>
                    <?php
                    if ($result_activites->num_rows > 0) {
                        while ($row = $result_activites->fetch_assoc()) {
                            echo "<option value='{$row['id_activite']}'>{$row['titre']}</option>";
                        }
                    } else {
                        echo "<option value=''>Aucune activité trouvée</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Statut -->
            <div>
                <label for="statut" class="block text-sm font-medium text-gray-700">Statut :</label>
                <select name="statut" id="statut" required class="mt-1 block w-full p-2 border border-gray-300 bg-white rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="En attente">En attente</option>
                    <option value="Confirmee">Confirmée</option>
                    <option value="Annulee">Annulée</option>
                </select>
            </div>

            <!-- Mode de paiement -->
            <div>
                <label for="paiement" class="block text-sm font-medium text-gray-700">Mode de paiement :</label>
                <select name="paiement" id="paiement" required class="mt-1 block w-full p-2 border border-gray-300 bg-white rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="Carte bancaire">Carte bancaire</option>
                    <option value="Espèces">Espèces</option>
                    <option value="Chèque">Chèque</option>
                </select>
            </div>

            <!-- Bouton de soumission -->
            <div>
                <button type="submit" class="w-full bg-indigo-600 text-white p-2 rounded-md shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Soumettre
                </button>
            </div>
        </form>
    </div>
</body>
</html>

<?php
$conn->close();
?>
