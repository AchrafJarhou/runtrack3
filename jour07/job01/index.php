<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Index</title>
  <!-- CDN Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex flex-col bg-gray-100">

  <!-- Header avec navigation stylée Tailwind -->
  <header class="bg-blue-600 text-white p-4">
    <nav >      
      <ul class="flex gap-8 font-semibold justify-center">
        <li><a class="hover:text-gray-200" href="index.php">Accueil</a></li>
        <li><a class="hover:text-gray-200" href="index.php">Inscription</a></li>
        <li><a class="hover:text-gray-200" href="index.php">Connexion</a></li>
        <li><a class="hover:text-gray-200" href="index.php">Rechercher</a></li>
      </ul>
    </nav>
  </header>

  
  <section class="p-8 max-w-xl mx-auto bg-white shadow rounded my-6">
        <form action="#" method="POST" class="space-y-4">

            <!-- Civilité -->
            <div>
                <label class="font-semibold">Civilité :</label><br>
                <label class="mr-4"><input type="radio" name="civilite" value="Homme"> Homme</label>
                <label class="mr-4"><input type="radio" name="civilite" value="Femme"> Femme</label>
                <label><input type="radio" name="civilite" value="Autre"> Autre</label>
            </div>

            <!-- Inputs texte -->
            <div>
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom" class="w-full border p-2 rounded" required>
            </div>

            <div>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" class="w-full border p-2 rounded" required>
            </div>

            <div>
                <label for="adresse">Adresse :</label>
                <input type="text" name="adresse" id="adresse" class="w-full border p-2 rounded" required>
            </div>

            <!-- Email -->
            <div>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" class="w-full border p-2 rounded" required>
            </div>

            <!-- Mot de passe -->
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" class="w-full border p-2 rounded" required>
            </div>

            <div>
                <label for="confirm_password">Confirmer le mot de passe :</label>
                <input type="password" name="confirm_password" id="confirm_password" class="w-full border p-2 rounded" required>
            </div>

            <!-- Passions -->
            <div>
                <label class="font-semibold">Passions :</label><br>
                <label class="block"><input type="checkbox" name="passions[]" value="informatique"> Informatique</label>
                <label class="block"><input type="checkbox" name="passions[]" value="voyages"> Voyages</label>
                <label class="block"><input type="checkbox" name="passions[]" value="sport"> Sport</label>
                <label class="block"><input type="checkbox" name="passions[]" value="lecture"> Lecture</label>
            </div>

            <!-- Bouton -->
            <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Créer mon compte
            </button>
        </form>
    </section>

  <!-- Footer stylé Tailwind -->
  <footer class="bg-white border-t">
    <div class="max-w-4xl mx-auto px-6 py-6 flex flex-col md:flex-row items-center justify-between gap-4">
      <div class="flex items-center gap-3">
        <span class="text-lg font-bold">MonSite</span>
        <p class="text-sm text-gray-600 hidden sm:block">© <?php echo date('Y'); ?> • Tous droits réservés</p>
      </div>

      <ul class="flex gap-6">
        <li><a class="text-gray-700 hover:text-blue-600 font-medium" href="index.php">Accueil</a></li>
        <li><a class="text-gray-700 hover:text-blue-600 font-medium" href="index.php">Inscription</a></li>
        <li><a class="text-gray-700 hover:text-blue-600 font-medium" href="index.php">Connexion</a></li>
        <li><a class="text-gray-700 hover:text-blue-600 font-medium" href="index.php">Rechercher</a></li>
      </ul>
    </div>
  </footer>

</body>
</html>
