// Créez une fonction “afficherjourssemaines”. Cette fonction ne prend pas de paramètre.
// Créez un tableau de strings “jourssemaines” qui contient l’ensemble des jours de la
// semaine, du Lundi au Dimanche. Ensuite à l’aide d’une boucle for (for!)Affichez un par
// un ces jours.

//! version avec une boucle forEach

function afficherjourssemaines() {
  const jourssemaines = [
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi",
    "Dimanche",
  ];
  jourssemaines.forEach((jour) => {
    console.log(jour);
  });
}

afficherjourssemaines();

//! version avec une boucle for

// function afficherjourssemaines() {
//   const jourssemaines = [
//     "Lundi",
//     "Mardi",
//     "Mercredi",
//     "Jeudi",
//     "Vendredi",
//     "Samedi",
//     "Dimanche",
//   ];
//   for (let i = 0; i < jourssemaines.length; i++) {
//     console.log(jourssemaines[i]);
//   }
// }
// afficherjourssemaines();
