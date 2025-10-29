// Indique que le script est chargé (utile pour le debug dans la console du navigateur)
console.log("script chargé");

const button = document.querySelector("#btn");

if (button) {
  // passer la fonction directement comme callback
  button.addEventListener("click", citation);
} else {
  console.error("Element #btn introuvable");
}

function citation() {
  const article = document.querySelector("#citation");
  if (!article) {
    console.error("Element #citation introuvable");
    return;
  }
  console.log(article.textContent);
}
