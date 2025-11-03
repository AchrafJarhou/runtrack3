<?php require 'config.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Accueil</title>
</head>
<body>
    <?php var_dump($_SESSION); ?>

<?php if (isset($_SESSION['prenom'])): ?>
    <p>Bonjour <?= htmlspecialchars($_SESSION['prenom']) ?></p>    
    <a href="deconnexion.php">Déconnexion</a>
<?php else: ?>
    <a href="inscription.php">Inscription</a> |
    <a href="connexion.php">Connexion</a>
<?php endif; ?>

</body>
</html>
