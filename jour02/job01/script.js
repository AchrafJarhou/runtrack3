const button = document.querySelector("#btn");

button.addEventListener("click", citation);

function citation() {
  const article = document.querySelector("#citation");
  console.log(article.textContent);
}
