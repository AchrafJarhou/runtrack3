let pokemons = [];

// Charger fichier JSON + types dynamiques
fetch("pokemon.json")
  .then((res) => res.json())
  .then((data) => {
    pokemons = data;

    // Récupère les types uniques

    const types = [...new Set(pokemons.flatMap((pokemon) => pokemon.type))];

    const select = document.getElementById("type");
    types.forEach((type) => {
      const opt = document.createElement("option");
      opt.value = type;
      opt.textContent = type;
      select.appendChild(opt);
    });
  });

// Filtrer au clic
document.getElementById("filterBtn").addEventListener("click", () => {
  const id = document.getElementById("id").value.trim();
  const name = document.getElementById("name").value.trim().toLowerCase();
  const type = document.getElementById("type").value;

  const results = pokemons.filter((pokemon) => {
    return (
      (!id || pokemon.id == id) &&
      (!name || pokemon.name.french.toLowerCase().includes(name)) &&
      (!type || pokemon.type.includes(type))
    );
  });
  console.log(results);

  display(results);
});

function display(list) {
  const div = document.getElementById("results");
  div.innerHTML = "";

  if (list.length === 0) {
    div.innerHTML = "<b>Aucun résultat</b>";
    return;
  }

  list.forEach((pokemon) => {
    div.innerHTML += `
        <div class="pokemon">
            <strong>#${pokemon.id}</strong> - ${pokemon.name.french}<br>
            Type : ${pokemon.type.join(", ")}
        </div>`;
  });
}
