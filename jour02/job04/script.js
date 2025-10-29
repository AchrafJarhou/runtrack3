// Créez un <textarea> dont l’id est “keylogger”.
// Chaque fois que l’utilisateur tape une lettre sur son clavier (a-z), celle-ci est ajoutée
// dans le textarea (même si le focus en cours n’est pas le textarea).
// Si le focus en cours est dans le textarea, la lettre doit être ajoutée deux fois.
const textarea = document.getElementById("keylogger");

document.addEventListener("keydown", function (event) {
  let char = event.key;
  if (char.length === 1 && char.match(/[a-z]/i)) {
    if (document.activeElement === textarea) {
      textarea.value = textarea.value + char;
    } else {
      textarea.value += char;
    }
  }
});
