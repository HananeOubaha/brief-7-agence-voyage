<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire d'activité</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
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
  <!-- form  -->
  <div class="bg-white p-6 mt-16 rounded-lg shadow-lg w-full max-w-md">
    <h1 class="text-2xl font-bold text-gray-700 text-center mb-6">Créer une activité</h1>
    <form action="activiteformule.php" method="POST" class="space-y-4">
      
      <!-- Champ Titre -->
      <div>
        <label for="titre" class="block text-gray-600 font-medium">Titre</label>
        <input 
          type="text"  
          id="titre" 
          name="titre" 
          class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" 
          placeholder="Entrez le titre de l'activité"
          required>
      </div>

      <!-- Champ Description -->
      <div>
        <label for="description" class="block text-gray-600 font-medium">Description</label>
        <textarea 
          id="description" 
          name="description" 
          class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" 
          placeholder="Décrivez l'activité"
          rows="4"
          required></textarea>
      </div>

      <!-- Champ Destination -->
      <div>
        <label for="destination" class="block text-gray-600 font-medium">Destination</label>
        <input 
          type="text" 
          id="destination" 
          name="destination" 
          class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" 
          placeholder="Entrez la destination"
          required>
      </div>

      <!-- Champ Prix -->
      <div>
        <label for="prix" class="block text-gray-600 font-medium">Prix</label>
        <input 
          type="number" 
          id="prix" 
          name="prix" 
          class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" 
          placeholder="Entrez le prix en €"
          step="0.01"
          required>
      </div>

      <!-- Champ Date de début -->
      <div>
        <label for="date_debut" class="block text-gray-600 font-medium">Date de début</label>
        <input 
          type="date" 
          id="date_debut" 
          name="date_debut" 
          class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" 
          required>
      </div>

      <!-- Champ Date de fin -->
      <div>
        <label for="date_fin" class="block text-gray-600 font-medium">Date de fin</label>
        <input 
          type="date" 
          id="date_fin" 
          name="date_fin" 
          class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" 
          required>
      </div>

      <!-- Champ Places disponibles -->
      <div>
        <label for="places_disponibles" class="block text-gray-600 font-medium">Places disponibles</label>
        <input 
          type="number" 
          id="places_disponibles" 
          name="places_disponibles" 
          class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" 
          placeholder="Entrez le nombre de places disponibles"
          min="1"
          required>
      </div>

      <!-- Bouton de soumission -->
      <div>
        <button 
          type="submit" 
          class="w-full bg-blue-500 text-white font-medium py-2 rounded-lg hover:bg-blue-600 focus:ring-2 focus:ring-blue-400">
          Ajouter l'activité
        </button>
      </div>
    </form>
  </div>
</body>
</html>
