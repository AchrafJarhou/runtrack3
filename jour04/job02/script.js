// Créez une fonction javascript “jsonValueKey()” qui prend en paramètre une chaîne de
// caractères au format json et une clé.
// Cette fonction retourne la valeur liée à cette clé dans la chaîne de caractères.

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
