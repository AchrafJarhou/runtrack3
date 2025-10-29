console.log("script chargé");
const button = document.querySelector("#btn");
if (button) {
  button.addEventListener("click", showhide);
} else {
  console.error("Element #btn introuvable");
}

function showhide() {
  const button = document.querySelector("#btn");
  const article = document.querySelector("#citation");
  if (!article) {
    console.error("Element #citation introuvable");
    return;
  }
  if (article.style.display === "none") {
    article.style.display = "block";
    article.textContent =
      "L'important n'est pas la chute, mais l'atterrissage.";
    button.textContent = "cacher l'article";
  } else {
    article.style.display = "none";
    button.textContent = "afficher l'article";
  }
}
