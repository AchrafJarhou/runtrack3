// Par défaut, votre index.php n’a pas de contenu.
// Lorsqu’un utilisateur effectue un code konami, la page devient stylisée, aux couleurs de
// La Plateforme_.

const textarea = document.getElementById("keylogger");
if (!textarea) {
  console.error("Element <textarea> introuvable — vérifiez votre HTML");
} else {
  // Code Konami : Haut, Haut, Bas, Bas, Gauche, Droite, Gauche, Droite, B, A
  const konamiCode = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
  let konamiIndex = 0;
  const applyKonamiStyle = () => {
    document.body.style.backgroundColor = "#0093E9";
    document.body.style.backgroundImage =
      "linear-gradient(160deg, #0093E9 0%, #80D0C7 100%)";
    document.body.style.color = "#FFFFFF";
    textarea.style.width = "80%";
    textarea.style.height = "400px";
    textarea.style.fontSize = "16px";
    textarea.style.padding = "10px";
    textarea.style.border = "2px solid #FFFFFF";
    textarea.style.borderRadius = "8px";
    textarea.style.boxShadow = "0 4px 8px rgba(0, 0, 0, 0.1)";
    textarea.style.backgroundColor = "rgba(255, 255, 255, 0.1)";
  };
  window.addEventListener("keydown", (event) => {
    if (event.keyCode === konamiCode[konamiIndex]) {
      konamiIndex++;
      if (konamiIndex === konamiCode.length) {
        applyKonamiStyle();
        konamiIndex = 0; // Reset index after successful code entry
      }
    } else {
      konamiIndex = 0; // Reset index on wrong key
    }
  });
}
