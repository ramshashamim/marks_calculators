let formA = document.querySelector(".form__a");
let formB = document.querySelector(".form__b");
let toggleButton = document.getElementById("toggleButton");

toggleButton.addEventListener("click", function () {
  formA.classList.toggle("hidden");
  formB.classList.toggle("hidden");
});
