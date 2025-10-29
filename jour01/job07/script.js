// Créez une fonction “jourtravaille” qui prend en paramètre une date au format Date. Si la
// date correspond à un jour férié de l’année 2020, la fonction affiche “Le $jour $mois
// $année est un jour férié”. Si elle correspond à un samedi ou un dimanche, alors le
// message affiché est “Non, $jour $mois $année est un week-end”, sinon afficher “Oui,
// $jour $mois $année est un jour travaillé”.
function jourtravaille(date) {
  const joursFeries2020 = [
    "1-1-2020",
    "4-4-2020",
    "5-5-2020",
    "21-5-2020",
    "1-6-2020",
    "14-7-2020",
    "15-8-2020",
    "1-11-2020",
    "11-11-2020",
    "25-12-2020",
  ];
  const jour = date.getDate();
  const mois = date.getMonth(); // Les mois commencent à 0
  const annee = date.getFullYear();
  const dateStr = `${jour}-${mois}-${annee}`;
  const jourSemaine = date.getDay(); // 0 = dimanche, 6 = samedi

  // Noms en français pour afficher le format "samedi 12 juin 2020"
  const dayNames = [
    "dimanche",
    "lundi",
    "mardi",
    "mercredi",
    "jeudi",
    "vendredi",
    "samedi",
  ];
  const monthNames = [
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "août",
    "septembre",
    "octobre",
    "novembre",
    "décembre",
  ];

  const formattedDate = `${dayNames[jourSemaine]} ${jour} ${monthNames[mois]} ${annee}`;

  if (joursFeries2020.includes(dateStr)) {
    console.log(`Le ${formattedDate} est un jour férié`);
  } else if (jourSemaine === 0 || jourSemaine === 6) {
    console.log(`Non, ${formattedDate} est un week-end`);
  } else {
    console.log(`Oui, ${formattedDate} est un jour travaillé`);
  }
}

// Test de la fonction
jourtravaille(new Date("2020-01-01")); // jour férié
jourtravaille(new Date("2020-07-14")); // jour férié
jourtravaille(new Date("2020-03-15")); // jour travaillé
jourtravaille(new Date("2020-03-14")); // week-end
