const paragraph = document.querySelector("#paragraphe");
if (!paragraph) {
  console.error("Element <p> introuvable — vérifiez votre HTML");
}
const btn = document.querySelector("#btn");
if (!btn) {
  console.error("Element <button> introuvable — vérifiez votre HTML");
}
btn.addEventListener("click", () => {
  if (paragraph.style.display === "none") {
    paragraph.style.display = "block";
    paragraph.textContent =
      "Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit,ensuite on prie.";
    btn.textContent = "Cacher le paragraphe";
  } else {
    paragraph.style.display = "none";
    btn.textContent = "Afficher le paragraphe";
  }
});
