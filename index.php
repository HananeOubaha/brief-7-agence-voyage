<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire d'inscription</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
    <h1 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Formulaire d'inscription</h1>
    <!-- action c'est pour envoyer data du formulaire a  ce fichier clientformule.php-->
    <form action="clientformule.php" method="POST" class="space-y-4">
      <!-- Champ Nom -->
      <div>
        <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
        <input type="text"id="nom" name="nom" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"placeholder="Entrez votre nom" required>
      </div>

      <!-- Champ Prénom -->
      <div>
        <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom</label>
        <input type="text" id="prenom" name="prenom" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"placeholder="Entrez votre prénom" required>
      </div>

      <!-- Champ Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"placeholder="Entrez votre email" required>
      </div>

      <!-- Champ Téléphone -->
      <div>
        <label for="telephone" class="block text-sm font-medium text-gray-700">Téléphone</label>
        <input type="tel" id="telephone" name="telephone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"placeholder="Entrez votre numéro de téléphone" required>
      </div>

      <!-- Champ Adresse -->
      <div>
        <label for="adresse" class="block text-sm font-medium text-gray-700">Adresse</label>
        <input type="text" id="adresse" name="adresse" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"placeholder="Entrez votre adresse" required>
      </div>

      <!-- Champ Date de Naissance -->
      <div>
        <label for="date_naissance" class="block text-sm font-medium text-gray-700">Date de naissance</label>
        <input type="date" id="date_naissance" name="date_naissance" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
      </div>

      <!-- Bouton Soumettre -->
      <div class="text-center">
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"> Soumettre</button>
      </div>
    </form>
  </div>
</body>
</html>