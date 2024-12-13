<?php
// Connexion à la base de données
$conn = new mysqli('localhost', 'root', '', 'voyage1');
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Récupération des noms des tables de la base de données
$tables = [];
$sql_tables = "SHOW TABLES";
$result_tables = $conn->query($sql_tables);

if ($result_tables->num_rows > 0) {
    while ($row = $result_tables->fetch_array()) {
        $tables[] = $row[0];
    }
} else {
    die("Aucune table trouvée dans la base de données.");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des Tables</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
     <!-- Navbar -->
     <nav class="bg-indigo-600 text-white shadow-lg fixed w-full top-0 z-10">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <ul class="flex space-x-4">
        <li><a href="index.php" class="hover:text-indigo-200">Formulaire d'inscription</a></li>
        <li><a href="activite.php" class="hover:text-indigo-200">Formulaire d'activités</a></li>
        <li><a href="reservation.php" class="hover:text-indigo-200">Formulaire de réservations</a></li>
        <li><a href="affichage.php" class="hover:text-indigo-200">affichage des données</a></li>
      </ul>
    </div>
  </nav>
  <!-- form -->
    <div class="max-w-7xl mx-auto mt-16 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Données de la Base de Données</h1>

        <?php foreach ($tables as $table): ?>
            <div class="mb-10">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Table : <?= htmlspecialchars($table) ?></h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 bg-white">
                        <thead class="bg-gray-50">
                            <?php
                            // Récupération des colonnes
                            $columns = [];
                            if ($table === 'reservations') {
                                // Colonnes personnalisées pour la table reservations
                                $columns = ['ID Réservation', 'Nom Client', 'Nom Activité', 'Autres Champs'];
                            } else {
                                $sql_columns = "SHOW COLUMNS FROM $table";
                                $result_columns = $conn->query($sql_columns);

                                if ($result_columns->num_rows > 0) {
                                    while ($col = $result_columns->fetch_assoc()) {
                                        $columns[] = $col['Field'];
                                    }
                                }
                            }

                            // Affichage des colonnes
                            echo "<tr>";
                            foreach ($columns as $column) {
                                echo "<th scope='col' class='px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'>" . htmlspecialchars($column) . "</th>";
                            }
                            echo "</tr>";
                            ?>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php
                            if ($table === 'reservations') {
                                // Récupération des données pour la table reservations avec JOIN
                                $sql_data = "
                                    SELECT 
                                        reservations.id_reservation AS id_reservation,
                                        clients.name AS client_name,
                                        activities.name AS activity_name,
                                        reservations.*
                                    FROM reservations
                                    LEFT JOIN clients ON reservations.id_client = clients.id_client
                                    LEFT JOIN activities ON reservations.id_activity = activities.id_activity
                                ";
                            } else {
                                // Requête classique pour les autres tables
                                $sql_data = "SELECT * FROM $table";
                            }

                            $result_data = $conn->query($sql_data);

                            if ($result_data->num_rows > 0) {
                                while ($row = $result_data->fetch_assoc()) {
                                    echo "<tr>";
                                    if ($table === 'reservations') {
                                        // Affichage des colonnes personnalisées pour reservations
                                        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>" . htmlspecialchars($row['id_reservation']) . "</td>";
                                        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>" . htmlspecialchars($row['client_name']) . "</td>";
                                        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>" . htmlspecialchars($row['activity_name']) . "</td>";
                                        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>...</td>";
                                    } else {
                                        // Affichage des données classiques pour les autres tables
                                        foreach ($columns as $column) {
                                            echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>" . htmlspecialchars($row[$column]) . "</td>";
                                        }
                                    }
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='" . count($columns) . "' class='px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center'>Aucune donnée disponible</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
<?php
$conn->close();
?>
