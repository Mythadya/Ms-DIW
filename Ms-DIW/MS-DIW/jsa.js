const form = document.getElementById('contactForm');

form.addEventListener('submit', (e) => {
  e.preventDefault();

  const nom = document.getElementById('nom');
  const prenom = document.getElementById('prenom');
  const email = document.getElementById('email');
  const telephone = document.getElementById('telephone');
  const adresse = document.getElementById('adresse');

  let isValid = true;

  // Vérification du champ Nom
  if (nom.value.trim() === '') {
    nom.classList.add('is-invalid');
    isValid = false;
  } else {
    nom.classList.remove('is-invalid');
    nom.classList.add('is-valid');
  }

  // Vérification du champ Téléphone
  if (telephone.value.trim() === '' ||!telephone.value.match(/^[0-9]{10}$/)) {
    telephone.classList.add('is-invalid');
    isValid = false;
  } else {
    telephone.classList.remove('is-invalid');
    telephone.classList.add('is-valid');
  }

  // Vérification du champ Email (facultatif)
  if (email.value!== '') {
    if (!email.value.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)) {
      email.classList.add('is-invalid');
      isValid = false;
    } else {
      email.classList.remove('is-invalid');
      email.classList.add('is-valid');
    }
  }

  // Vérification du champ Adresse (facultatif)
  if (adresse.value!== '') {
    if (adresse.value.trim() === '') {
      adresse.classList.add('is-invalid');
      isValid = false;
    } else {
      adresse.classList.remove('is-invalid');
      adresse.classList.add('is-valid');
    }
  }

  if (isValid) {
    // Envoyer le formulaire si tout est valide
    form.submit();
  }
});