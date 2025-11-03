<?php require 'config.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Connexion</title>
<style>.error{color:red;font-size:14px;}</style>
</head>
<body>

<h2>Connexion</h2>

<form id="formConnexion">
    <input type="email" name="email" placeholder="Email">
    <div class="error" id="errEmail"></div>

    <input type="password" name="password" placeholder="Mot de passe">
    <div class="error" id="errPassword"></div>

    <button type="submit">Se connecter</button>
</form>

<script>
document.getElementById('formConnexion').addEventListener('submit', async (e)=>{
    e.preventDefault();
    
    const req = await fetch("connexion_traitement.php", {
        method:"POST",
        body: new FormData(e.target)
    });

    const res = await req.json();
    
    if(res.success){
        window.location.href = "index.php";
    } else {
        document.getElementById("errEmail").innerText = res.errors.Email ?? "";
        document.getElementById("errPassword").innerText = res.errors.Password ?? "";
    }
});
</script>

</body>
</html>
