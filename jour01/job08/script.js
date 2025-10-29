// Créez une fonction “sommenombrespremiers” qui prend en paramètres deux variables.
// Si ces deux variables sont des nombres premiers, alors la fonction retourne leur
// somme. Sinon, la fonction retourne false.
function isPrime(num) {
  if (num <= 1) return false;
  for (let i = 2; i <= Math.sqrt(num); i++) {
    if (num % i === 0) return false;
  }
  return true;
}
function sommenombrespremiers(a, b) {
  if (isPrime(a) && isPrime(b)) {
    return a + b;
  } else {
    return false;
  }
}

// Test de la fonction
console.log(sommenombrespremiers(3, 5)); // 8
console.log(sommenombrespremiers(4, 5)); // false
console.log(sommenombrespremiers(7, 11)); // 18
