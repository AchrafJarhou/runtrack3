<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Filtre Pokémon</title>
    <style>
      body {
        font-family: Arial;
        padding: 20px;
      }
      input,
      select {
        margin: 5px;
        padding: 5px;
      }
      .pokemon {
        border: 1px solid #ccc;
        padding: 10px;
        margin-top: 5px;
        border-radius: 5px;
      }
    </style>
  </head>
  <body>
    <h2>Filtrer les Pokémon</h2>

    <label>ID :</label>
    <input type="text" id="id" />

    <label>Nom :</label>
    <input type="text" id="name" />

    <label>Type :</label>
    <select id="type">
      <option value="">-- Tous --</option>
    </select>

    <input type="button" id="filterBtn" value="Filtrer" />

    <h3>Résultats :</h3>
    <div id="results"></div>

    <script src="script.js">
      let pokemons = [];

      // Charger fichier JSON + types dynamiques
      fetch("pokemon.json")
        .then((res) => res.json())
        .then((data) => {
          pokemons = data;

          // Récupère les types uniques
          const types = [...new Set(data.flatMap((p) => p.type))];

          const select = document.getElementById("type");
          types.forEach((t) => {
            const opt = document.createElement("option");
            opt.value = t;
            opt.textContent = t;
            select.appendChild(opt);
          });
        });

      // Filtrer au clic
      document.getElementById("filterBtn").addEventListener("click", () => {
        const id = document.getElementById("id").value.trim();
        const name = document.getElementById("name").value.trim().toLowerCase();
        const type = document.getElementById("type").value;

        const results = pokemons.filter((p) => {
          return (
            (!id || p.id == id) &&
            (!name || p.name.french.toLowerCase().includes(name)) &&
            (!type || p.type.includes(type))
          );
        });

        display(results);
      });

      function display(list) {
        const div = document.getElementById("results");
        div.innerHTML = "";

        if (list.length === 0) {
          div.innerHTML = "<b>Aucun résultat</b>";
          return;
        }

        list.forEach((p) => {
          div.innerHTML += `
        <div class="pokemon">
            <strong>#${p.id}</strong> - ${p.name.french}<br>
            Type : ${p.type.join(", ")}
        </div>`;
        });
      }
    </script>
  </body>
</html>
