<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

   
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Rechercher</a></li>
            </ul>
        </nav>
    </header>

    <h1>Création de compte</h1>

    
    <section>
        <form action="#" method="POST">

            
            <label>Civilité :</label><br>
            <input type="radio" name="civilite" value="Homme" id="homme">
            <label for="homme">Homme</label>

            <input type="radio" name="civilite" value="Femme" id="femme">
            <label for="femme">Femme</label>

            <input type="radio" name="civilite" value="Autre" id="autre">
            <label for="autre">Autre</label>
            <br><br>

            
            <label for="prenom">Prénom :</label><br>
            <input type="text" name="prenom" id="prenom" required><br><br>

            <label for="nom">Nom :</label><br>
            <input type="text" name="nom" id="nom" required><br><br>

            <label for="adresse">Adresse :</label><br>
            <input type="text" name="adresse" id="adresse" required><br><br>

           
            <label for="email">Email :</label><br>
            <input type="email" name="email" id="email" required><br><br>

           
            <label for="password">Mot de passe :</label><br>
            <input type="password" name="password" id="password" required><br><br>

            <label for="confirm_password">Confirmer le mot de passe :</label><br>
            <input type="password" name="confirm_password" id="confirm_password" required><br><br>

            
            <label>Passions :</label><br>
            <input type="checkbox" name="passions[]" value="informatique" id="informatique">
            <label for="informatique">Informatique</label><br>

            <input type="checkbox" name="passions[]" value="voyages" id="voyages">
            <label for="voyages">Voyages</label><br>

            <input type="checkbox" name="passions[]" value="sport" id="sport">
            <label for="sport">Sport</label><br>

            <input type="checkbox" name="passions[]" value="lecture" id="lecture">
            <label for="lecture">Lecture</label><br><br>

            
            <button type="submit">Créer mon compte</button>
        </form>
    </section>

    
    <footer>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php">Inscription</a></li>
            <li><a href="index.php">Connexion</a></li>
            <li><a href="index.php">Rechercher</a></li>
        </ul>
    </footer>

</body>
</html>
