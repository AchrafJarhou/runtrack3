// Créez une fonction “tri” qui prend en paramètres un tableau de nombres nommé
// “numbers” et une variable “order” qui contient “asc” ou “desc”. A l’aide de la fonction
// sort() d’un algorithme développé par vos soins, cette fonction doit trier le tableau dans
// l’ordre ascendant ou décroissant, selon le paramètre passé, puis retourner le tableau.
function tri(numbers, order) {
  if (order === "asc") {
    return numbers.sort((a, b) => a - b);
  } else if (order === "desc") {
    return numbers.sort((a, b) => b - a);
  } else {
    return "Le paramètre order doit être 'asc' ou 'desc'";
  }
}
// Test de la fonction
console.log(tri([5, 2, 9, 1, 5, 6], "asc")); // [1, 2, 5, 5, 6, 9]
console.log(tri([5, 2, 9, 1, 5, 6], "desc")); // [9, 6, 5, 5, 2, 1]
console.log(tri([5, 2, 9, 1, 5, 6], "invalid")); // Le paramètre order doit être 'asc' ou 'desc'
