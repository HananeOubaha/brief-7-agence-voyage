<?php
// Connexion à la base de données
$conn = mysqli_connect('localhost', 'root', '', 'voyage1');
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

// Récupération des noms des tables
$result_tables = mysqli_query($conn, "SHOW TABLES");
$tables = [];

if ($result_tables) {
    while ($row = mysqli_fetch_row($result_tables)) {
        $tables[] = $row[0]; // Chaque table est ajoutée au tableau
    }
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
    <nav class="bg-red-400 text-white shadow-lg fixed w-full top-0 z-10">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <ul class="flex space-x-4">
                <li><a href="index.php" class="hover:text-black">Formulaire d'inscription</a></li>
                <li><a href="activite.php" class="hover:text-black">Formulaire d'activités</a></li>
                <li><a href="reservation.php" class="hover:text-black">Formulaire de réservations</a></li>
                <li><a href="affichage.php" class="hover:text-black">Affichage des données</a></li>
            </ul>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="max-w-7xl mx-auto mt-16 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Données de la Base de Données</h1>

        <?php if (!empty($tables)): ?>
            <?php foreach ($tables as $table): ?>
                <div class="mb-10">
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Table : <?= htmlspecialchars($table) ?></h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 bg-white">
                            <thead class="bg-red-200">
                                <?php
                                // Récupération des colonnes de la table
                                $result_columns = mysqli_query($conn, "SHOW COLUMNS FROM $table");
                                if ($result_columns) {
                                    echo "<tr>";
                                    while ($column = mysqli_fetch_assoc($result_columns)) {
                                        echo "<th class='px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'>" . htmlspecialchars($column['Field']) . "</th>";
                                    }
                                    echo "</tr>";
                                }
                                ?>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php
                                // Récupération des données de la table
                                $result_data = mysqli_query($conn, "SELECT * FROM $table");
                                if ($result_data && mysqli_num_rows($result_data) > 0) {
                                    while ($row = mysqli_fetch_assoc($result_data)) {
                                        echo "<tr>";
                                        foreach ($row as $value) {
                                            echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>" . htmlspecialchars($value) . "</td>";
                                        }
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='100%' class='px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center'>Aucune donnée disponible</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucune table trouvée dans la base de données.</p>
        <?php endif; ?>
    </div>
</body>
</html>
<?php
// Fermeture de la connexion
mysqli_close($conn);
?>
