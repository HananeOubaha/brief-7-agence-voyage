<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de réservation</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
    <h1 class="text-2xl font-bold text-gray-700 text-center mb-6">Créer une réservation</h1>
    <form action="/ajouter-reservation" method="POST" class="space-y-4">
      
      <!-- Sélection du client -->
      <div>
        <label for="client_id" class="block text-gray-600 font-medium">Nom du client</label>
        <select 
          id="client_id" 
          name="client_id" 
          class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
          required>
          <option value="" disabled selected>Choisissez un client</option>
          <option value="1">Client 1</option>
          <option value="2">Client 2</option>
          <option value="3">Client 3</option>
        </select>
      </div>

      <!-- Sélection de l'activité -->
      <div>
        <label for="activite_id" class="block text-gray-600 font-medium">Nom de l'activité</label>
        <select 
          id="activite_id" 
          name="activite_id" 
          class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
          required>
          <option value="" disabled selected>Choisissez une activité</option>
          <option value="101">Activité 101</option>
          <option value="102">Activité 102</option>
          <option value="103">Activité 103</option>
        </select>
      </div>

      <!-- Date de réservation -->
      <div>
        <label for="date_reservation" class="block text-gray-600 font-medium">Date de réservation</label>
        <input 
          type="date" 
          id="date_reservation" 
          name="date_reservation" 
          class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
          required>
      </div>

      <!-- Statut de la réservation -->
      <div>
        <label for="status" class="block text-gray-600 font-medium">Statut</label>
        <select 
          id="status" 
          name="status" 
          class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
          required>
          <option value="" disabled selected>Choisissez un statut</option>
          <option value="confirmer">Confirmé</option>
          <option value="en_attente">En attente</option>
          <option value="annule">Annulé</option>
        </select>
      </div>

      <!-- Bouton de soumission -->
      <div>
        <button 
          type="submit" 
          class="w-full bg-blue-500 text-white font-medium py-2 rounded-lg hover:bg-blue-600 focus:ring-2 focus:ring-blue-400">
          Ajouter la réservation
        </button>
      </div>
      
    </form>
  </div>
</body>
</html>
