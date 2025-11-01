document.getElementById("updateBtn").addEventListener("click", function () {
  fetch("user.php")
    .then((response) => {
      if (!response.ok) throw new Error("HTTP error " + response.status);
      return response.json();
    })
    .then((data) => {
      let table = "";
      data.forEach((user) => {
        table += `
                <tr>
                    <td>${user.id}</td>
                    <td>${user.nom}</td>
                    <td>${user.prenom}</td>
                    <td>${user.email}</td>
                </tr>
            `;
      });
      document.getElementById("userTable").innerHTML = table;
    })
    .catch((err) => {
      console.error("Fetch error:", err);
      document.getElementById(
        "userTable"
      ).innerHTML = `<tr><td colspan="4">Erreur : ${err.message}</td></tr>`;
    });
});
