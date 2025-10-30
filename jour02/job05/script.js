// Créez un fichier style.css. Définissez la taille minimale de votre body à 4096px.
// Ajoutez un <footer> qui prend toute la largeur de votre page en position : fixed en bas
// de votre fenêtre.
// De la même façon qu’une barre de chargement, la couleur du footer doit évoluer en
// fonction du pourcentage de scrolling.
// Récupérer le footer une fois
const footer = document.querySelector("footer");
if (!footer) {
  console.error("Element <footer> introuvable — vérifiez votre HTML");
} else {
  const applyColor = () => {
    const scrollTop = window.scrollY;
    const docHeight =
      document.documentElement.scrollHeight - window.innerHeight;
    // Éviter division par zéro si pas de scroll possible
    const scrollPercent = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
    footer.style.backgroundColor = `hsl(${scrollPercent}, 100%, 50%)`;
  };

  window.addEventListener("scroll", applyColor);
  // Appliquer au chargement / redimensionnement également
  window.addEventListener("load", applyColor);
  window.addEventListener("resize", applyColor);
  applyColor();
}
