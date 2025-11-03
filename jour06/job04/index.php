<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Header</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo">MonSite</div>
      <ul class="nav-links">
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Présentation</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div class="burger" id="burger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
  </header>

  <script>
    const burger = document.getElementById("burger");
    const navLinks = document.querySelector(".nav-links");

    burger.addEventListener("click", () => {
      navLinks.classList.toggle("active");
    });
  </script>
</body>
</html>
