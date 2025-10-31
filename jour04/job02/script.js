const data = `{
  "name": "La Plateforme_",
  "address": "8 rue d'hozier",
  "city": "Marseille",
  "nb_staff": "11",
  "creation": "2019"
}`;

function jsonValueKey(jsonString, key) {
  // Convertit la chaîne JSON en objet JS
  const obj = JSON.parse(jsonString);
  console.log(obj);

  // Retourne la valeur associée à la clé
  return obj[key];
}

console.log(jsonValueKey(data, "city"));
// ➜ "Marseille"
