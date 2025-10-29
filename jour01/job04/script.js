// Déclarez une fonction “bisextile” qui prend en paramètre une variable “année”. Si l’année
// est bisextile, la fonction retourne true, sinon elle retourne false.
// une année bisextile est une année qui a 366 jours au lieu de 365. Une année est bisextile si elle est
// divisible par 4 mais pas par 100, ou si elle est divisible par 400.

function bisextile(annee) {
  if ((annee % 4 === 0 && annee % 100 !== 0) || annee % 400 === 0) {
    return true;
  } else {
    return false;
  }
}
// Test de la fonction
console.log(bisextile(2020)); // true
console.log(bisextile(1900)); // false
console.log(bisextile(2000)); // true
