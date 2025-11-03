<?php require 'config.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Inscription</title>
<style>
.error {color:red;font-size:14px;}
</style>
</head>
<body>

<h2>Inscription</h2>

<form id="formInscription">
    <input type="text" name="prenom" placeholder="Prénom">
    <div class="error" id="errPrenom"></div>

    <input type="text" name="nom" placeholder="Nom">
    <div class="error" id="errNom"></div>

    <input type="email" name="email" placeholder="Email">
    <div class="error" id="errEmail"></div>

    <input type="password" name="password" placeholder="Mot de passe">
    <div class="error" id="errPassword"></div>

    <input type="password" name="confirm" placeholder="Confirmer mot de passe">
    <div class="error" id="errConfirm"></div>

    <button type="submit">S'inscrire</button>
</form>

<p id="success"></p>

<script>
document.getElementById('formInscription').addEventListener('submit', async (e)=>{
    e.preventDefault();
    const form = new FormData(e.target); 

    const req = await fetch("inscription_traitement.php", {
        method: "POST",
        body: form
    });

    const res = await req.json();
    console.log(`voici la reponse ${res} `);

    document.querySelectorAll(".error").forEach(e => e.innerText = "");

    if(res.success){
        document.getElementById("success").innerText = "Inscription réussie ! Redirection...";
        setTimeout(()=> window.location.href="connexion.php", 1200);
    } else {
        for(const field in res.errors){
            document.getElementById("err"+field).innerText = res.errors[field];
        }
    }
});
</script>

</body>
</html>
