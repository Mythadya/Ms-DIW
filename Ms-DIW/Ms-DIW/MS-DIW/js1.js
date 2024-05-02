
  document.addEventListener("DOMContentLoaded", function () {
    // Validation du formulaire
    const form = document.getElementById("contactForm");
    form.addEventListener("submit", function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add("was-validated");
    });

    // Contrôle de la quantité
    const decreaseBtn = document.getElementById("decreaseQuantity");
    const increaseBtn = document.getElementById("increaseQuantity");
    const quantityInput = document.getElementById("quantityInput");

    decreaseBtn.addEventListener("click", function () {
        let currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
        }
    });

    increaseBtn.addEventListener("click", function () {
        let currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity < 10) {
            quantityInput.value = currentQuantity + 1;
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contactForm");

  form.addEventListener("submit", function (event) {
      event.preventDefault();
      event.stopPropagation();

      if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
      }

      form.classList.add("was-validated");
  }, false);

  form.addEventListener("input", function (event) {
      if (event.target.tagName === "INPUT" || event.target.tagName === "TEXTAREA") {
          event.target.classList.add("is-valid");

          if (event.target.checkValidity() === false) {
              event.target.classList.remove("is-valid");
          }
      }
  }, false);
  
  // Rendre tous les champs requis
  const inputFields = form.querySelectorAll("input, textarea");
  inputFields.forEach(function (input) {
      input.setAttribute("required", "");
  });
});