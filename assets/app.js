import './bootstrap.js';

import './styles/app.css';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

document.addEventListener("DOMContentLoaded", function () {
  var toggleButton = document.getElementById("toggleButton");
  var carForm = document.getElementById("carForm");

  toggleButton.addEventListener("click", function () {
    if (carForm.style.display === "none") {
      carForm.style.display = "block";
      toggleButton.textContent = "Fermer";
    }
    else {
      carForm.style.display = "none";
      toggleButton.textContent = "Ajouter une annonce";
    }
  });
});