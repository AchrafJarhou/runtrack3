const btn = document.getElementById("btn");
const compteur = document.getElementById("compteur");
let count = 0;
btn.addEventListener("click", addone);

function addone() {
  count += 1;
  compteur.textContent = count;
}
