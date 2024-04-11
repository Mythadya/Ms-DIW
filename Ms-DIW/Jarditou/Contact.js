/* function Conta()
{
    var name = document.forms["RegForm"]["nom"];
    var forename = document.forms["RegForms"]["prenom"];
    var what = document.forms["RegForms"]["sujet"];
    var birth = document.forms["RegForms"]["ddn"];
    var addresse = document.forms["RegForms"]["Adresse"];
    var zip = document.forms["RegForms"]["CodePostal"];
    var city = document.forms["RegForms"]["Ville"];
    var email = document.forms["RegForms"]["Email"];

    if (name.value =="")
    {
        alert("Mettez votre nom.");
        name.focus();
        return false;
    }
    if (forename.value =="")
    {
        alert("Mettez votre prenom.");
        forename.focus();
        return false;
    }
    if (what.value =="")
    {
        alert("Indiquez Votre Question");
        what.focus();
        return false;
    }
    if (birth.value =="")
    {
        alert("Indiquez votre date de naissance");
        birth.focus();
        return false;
    }
    if (addresse.value =="")
    {
        alert("Indiquez Votre adresse")
        adresse.focus();
        return false;
    }
    if (zip.value =="")
    {
        alert("Indiquez Votre code postal");
        zip.focus();
        return false;
    }
    if ( city.value =="")
    {
        alert("Indiquez Votre Ville");
        city.focus();
        return false;
    }
    if (email.value == "")
    {
        alert("Mettez une adresse email valide");
        email.focus();
        return false;
    }
    if (email.value.indexOf("@", 0) < 0) {
        alert("Mettez une adresse email valide.");
        email.focus();
        return false;
    }
      if (email.value.indexOf(".", 0) < 0) {
        alert("Mettez une adresse email valide.");
        email.focus();
        return false;
    }
    return false
} */

/* function validateForm() {
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var genre = document.querySelector('input[name="Genre"]:checked');
    var date = document.getElementById("date").value;
    var codePostal = document.getElementById("Codepostal").value;
    var adresse = document.getElementById("Adresse").value;
    var ville = document.getElementById("Ville").value;
    var email = document.getElementById("Email").value;
    var sujet = document.getElementById("sujet").value;

    if (nom == "" || prenom == "" || genre == null || date == "" || codePostal == "" || adresse == "" || ville == "" || email == "" || sujet == "") {
        alert("Veuillez remplir tous les champs obligatoires.");
        return false;
    }

    return true;
} */

/* function validateForm() {
    const inputs = document.querySelectorAll('input[required]');
    let isValid = true;
    inputs.forEach(input => {
      if (input.value.length === 0) {
        input.nextElementSibling.innerText = 'Ce champ est obligatoire';
        isValid = false;
      } else {
        input.nextElementSibling.innerText = '';
      }
  
    });
    const textarea = document.querySelector('textarea[required]');
    if (textarea.value.length === 0) {
      textarea.nextElementSibling.innerText = 'Ce champ est obligatoire';
      isValid = false;
    } else {
      textarea.nextElementSibling.innerText = '';
    }
    if (!isValid) {
      return false;
    }
    return true;
  } */
     

             /*  1er essai */

  /* function validateForm() {
    let inputs = ['nom', 'prenom', 'Genre', 'date', 'CodePostal', 'Adresse', 'Ville', 'Email', 'sujet', 'Votre question'];

    for (let i = 0; i < inputs.length; i++) {
      let input = document.getElementById(inputs[i]);
      let errorMessage = document.getElementById(`error-${inputs[i]}`);
      if (input.value.trim() === '') {
        errorMessage.style.display = 'block';
        input.style.borderColor = 'red';
      } else {
        errorMessage.style.display = 'none';
        input.style.borderColor = 'initial';
      }
    }
    for (let i = 0; i < inputs.length; i++) {
      let input = document.getElementById(inputs[i]);
      if (input.style.borderColor === 'red') {
        return false;
      }
    }
  
    return true;
  }

  document.querySelectorAll('input[id], select[id]').forEach((input) => {
    let errorMessage = document.createElement('p');
    errorMessage.id = `error-${input.id}`;
    errorMessage.style.color = 'red';
    errorMessage.style.display = 'none';
    errorMessage.textContent = `Veuillez remplir ce champ.`;
    input.parentNode.insertBefore(errorMessage, input.nextSibling);
  }); */


                 /*  2eme essai */

 /*  function validateInput(inputId) {
    let input = document.getElementById(inputId);
    let errorMessage = document.getElementById(`error-${inputId}`);
  
    if (input.value.trim() === '') {
      errorMessage.style.display = 'block';
      input.style.borderColor = 'red';
    } else {
      errorMessage.style.display = 'none';
      input.style.borderColor = 'initial';
    }
  }
  
  function validateForm() {
    let inputs = ['nom', 'prenom', 'Genre', 'date', 'CodePostal', 'Adresse', 'Ville', 'Email', 'sujet', 'Votre question'];
  
    for (let i = 0; i < inputs.length; i++) {
      validateInput(inputs[i]);
    }
  
    for (let i = 0; i < inputs.length; i++) {
      let input = document.getElementById(inputs[i]);
      if (input.style.borderColor === 'red') {
        return false;
      }
    }
  
    return true;
  }
  
  document.querySelectorAll('input[id], select[id]').forEach((input) => {
    let errorMessage = document.createElement('p');
    errorMessage.id = `error-${input.id}`;
    errorMessage.style.color = 'red';
    errorMessage.style.display = 'none';
    errorMessage.textContent = `Veuillez remplir ce champ.`;
    input.parentNode.insertBefore(errorMessage, input.nextSibling);
  
    input.addEventListener('input', () => {
      validateInput(input.id);
    });
  }); */


               /* 3eme essai */

/* function afficherErreur(element, message) {
  let messageErreur = document.getElementById(`error-${element.id}`);
  if (messageErreur) {
    messageErreur.textContent = message;
    messageErreur.style.display = 'block';
  }
}

function cacherErreur(element) {
  let messageErreur = document.getElementById(`error-${element.id}`);
  if (messageErreur) {
    messageErreur.style.display = 'none';
  }
}

function validerFormulaire() {
  let inputs = ['nom', 'prenom', 'Genre', 'date', 'CodePostal', 'Adresse', 'Ville', 'Email', 'sujet', 'Votre question'];
  let estValide = true;

  for (let i = 0; i < inputs.length; i++) {
    let input = document.getElementById(inputs[i]);
    if (input.value.trim() === '') {
      afficherErreur(input, 'Veuillez remplir ce champ.');
      input.style.borderColor = 'red';
      estValide = false;
    } else {
      cacherErreur(input);
      input.style.borderColor = 'initial';
    }
  }

  return estValide;
}

document.querySelectorAll('input[id], select[id]').forEach((input) => {
  let messageErreur = document.createElement('p');
  messageErreur.id = `error-${input.id}`;
  messageErreur.style.color = 'red';
  messageErreur.style.display = 'none';
  messageErreur.textContent = `Veuillez remplir ce champ.`;
  input.parentNode.insertBefore(messageErreur, input.nextSibling);
});
 */

                 /* 4eme essai */

/* function validateForm() {

  const form = document.forms.Contact;
  const nomError = document.getElementById('error-nom');
  const prenomError = document.getElementById('error-prenom');
  const femininError = document.getElementById('error-feminin');
  const masculinError = document.getElementById('error-masculin');
  const dateError = document.getElementById('error-date');
  const CodePostalError = document.getElementById('error-CodePostal');
  const AdresseError = document.getElementById('error-Adresse');
  const VilleError = document.getElementById('error-Ville');
  const EmailError = document.getElementById('error-Email');
  const sujetError = document.getElementById('error-sujet');
  const VotreQuestionError = document.getElementById('error-VotreQuestion');

  nomError.style.color = 'initial';
  prenomError.style.color = 'initial';
  femininError.style.color = 'initial';
  masculinError.style.color = 'initial';
  dateError.style.color = 'initial';
  CodePostalError.style.color = 'initial';
  AdresseError.style.color = 'initial';
  VilleError.style.color = 'initial';
  EmailError.style.color = 'initial';
  sujetError.style.color = 'initial';
  VotreQuestionError.style.color = 'initial';

  let isValid = true;

  if (form.nom.value === '') {
    nomError.style.color = 'red';
    isValid = false;
  }

  if (form.prenom.value === '') {
    prenomError.style.color = 'red';
    isValid = false;
  }

  if (!form.Genre[0].checked && !form.Genre[1].checked) {
    femininError.style.color = 'red';
    masculinError.style.color = 'red';
    isValid = false;
  }

  if (form.ddn.value === '') {
    dateError.style.color = 'red';
    isValid = false;
  }

  if (form.CodePostal.value === '') {
    CodePostalError.style.color = 'red';
    isValid = false;
  } else if (!/^\d{5}$/.test(form.CodePostal.value)) {
    CodePostalError.style.color = 'red';
    isValid = false;
  }

  if (form.Adresse.value === '') {
    AdresseError.style.color = 'red';
    isValid = false;
  }

  if (form.Ville.value === '') {
    VilleError.style.color = 'red';
    isValid = false;
  }

  if (form.Email.value === '') {
    EmailError.style.color = 'red';
    isValid = false;
  } else if (!/^\S+@\S+\.\S+$/.test(form.Email.value)) {
    EmailError.style.color = 'red';
    isValid = false;
  }

  if (form.sujet.value === '') {
    sujetError.style.color = 'red';
    isValid = false;
  }

  if (form.VotreQuestion.value === '') {
    VotreQuestionError.style.color = 'red';
    isValid = false;
  }

  if (!isValid) {
    return false;
  }

  return true;
}

document.getElementById('submit-button').addEventListener('click', (event) => {
  if (!validateForm()) {
    event.preventDefault();
  }
}); */


/* 5eme essai  */

function setErrorMessage(element, message) {
  element.textContent = message;
}

function validateForm() {
  const form = document.forms.Contact;
  const nomError = document.getElementById('error-nom');
  const prenomError = document.getElementById('error-prenom');
  const femininError = document.getElementById('error-feminin');
  const masculinError = document.getElementById('error-masculin');
  const dateError = document.getElementById('error-date');
  const CodePostalError = document.getElementById('error-CodePostal');
  const AdresseError = document.getElementById('error-Adresse');
  const VilleError = document.getElementById('error-Ville');
  const EmailError = document.getElementById('error-Email');
  const sujetError = document.getElementById('error-sujet');
  const VotreQuestionError = document.getElementById('error-VotreQuestion');

  setErrorMessage(nomError, '');
  setErrorMessage(prenomError, '');
  setErrorMessage(femininError, '');
  setErrorMessage(masculinError, '');
  setErrorMessage(dateError, '');
  setErrorMessage(CodePostalError, '');
  setErrorMessage(AdresseError, '');
  setErrorMessage(VilleError, '');
  setErrorMessage(EmailError, '');
  setErrorMessage(sujetError, '');
  setErrorMessage(VotreQuestionError, '');

  let isValid = true;

  if (form.nom.value === '') {
    setErrorMessage(nomError, 'Veuillez saisir votre nom.');
    isValid = false;
  }

  if (form.prenom.value === '') {
    setErrorMessage(prenomError, 'Veuillez saisir votre prénom.');
    isValid = false;
  }

  if (!form.Genre[0].checked && !form.Genre[1].checked) {
    setErrorMessage(femininError, 'Veuillez sélectionner votre genre Feminin.');
    setErrorMessage(masculinError, 'Veuillez sélectionner votre genre Masculin.');
    isValid = false;
  }

  if (form.ddn.value === '') {
    setErrorMessage(dateError, 'Veuillez saisir votre date de naissance.');
    isValid = false;
  }

  if (form.CodePostal.value === '') {
    setErrorMessage(CodePostalError, 'Veuillez saisir votre code postal.');
    isValid = false;
  } else if (!/^\d{5}$/.test(form.CodePostal.value)) {
    setErrorMessage(CodePostalError, 'Code postal invalide.');
    isValid = false;
  }

  if (form.Adresse.value === '') {
    setErrorMessage(AdresseError, 'Veuillez saisir votre adresse.');
    isValid = false;
  }

  if (form.Ville.value === '') {
    setErrorMessage(VilleError, 'Veuillez saisir votre ville.');
    isValid = false;
  }

  if (form.Email.value === '') {
    setErrorMessage(EmailError, 'Veuillez saisir votre adresse e-mail.');
    isValid = false;
  } else if (!/^\S+@\S+\.\S+$/.test(form.Email.value)) {
    setErrorMessage(EmailError, 'Adresse e-mail invalide.');
    isValid = false;
  }

  if (form.sujet.value === '') {
    setErrorMessage(sujetError, 'Veuillez saisir le sujet de votre question.');
    isValid = false;
  }

  if (form.VotreQuestion.value === '') {
    setErrorMessage(VotreQuestionError, 'Veuillez saisir votre question.');
    isValid = false;
  }

  if (!isValid) {
    return false;
  }

  return true;
}

document.getElementById('submit-button').addEventListener('click', (event) => {
  if (!validateForm()) {
    event.preventDefault();
  }
});


                   /* 6eme essais  */

/* function setErrorMessage(element, message) {
  element.textContent = message;
}

function validateForm() {
  const form = document.forms.Contact;
  const nomError = document.getElementById('error-nom');
  const prenomError = document.getElementById('error-prenom');
  const femininError = document.getElementById('error-feminin');
  const masculinError = document.getElementById('error-masculin');
  const dateError = document.getElementById('error-date');
  const CodePostalError = document.getElementById('error-CodePostal');
  const AdresseError = document.getElementById('error-Adresse');
  const VilleError = document.getElementById('error-Ville');
  const EmailError = document.getElementById('error-Email');
  const sujetError = document.getElementById('error-sujet');
  const VotreQuestionError = document.getElementById('error-VotreQuestion');

  setErrorMessage(nomError, '');
  setErrorMessage(prenomError, '');
  setErrorMessage(femininError, '');
  setErrorMessage(masculinError, '');
  setErrorMessage(dateError, '');
  setErrorMessage(CodePostalError, '');
  setErrorMessage(AdresseError, '');
  setErrorMessage(VilleError, '');
  setErrorMessage(EmailError, '');
  setErrorMessage(sujetError, '');
  setErrorMessage(VotreQuestionError, '');

  let isValid = true;

  if (form.nom.value === '') {
    setErrorMessage(nomError, 'Veuillez saisir votre nom.');
    isValid = false;
  }

  if (form.prenom.value === '') {
    setErrorMessage(prenomError, 'Veuillez saisir votre prénom.');
    isValid = false;
  }

  if (!form.Genre[0].checked && !form.Genre[1].checked) {
    setErrorMessage(femininError, 'Veuillez sélectionner votre genre.');
    setErrorMessage(masculinError, 'Veuillez sélectionner votre genre.');
    isValid = false;
  }

  if (form.ddn.value === '') {
    setErrorMessage(dateError, 'Veuillez saisir votre date de naissance.');
    isValid = false;
  }

  if (form.CodePostal.value === '') {
    setErrorMessage(CodePostalError, 'Veuillez saisir votre code postal.');
    isValid = false;
  } else if (!/^\d{5}$/.test(form.CodePostal.value)) {
    setErrorMessage(CodePostalError, 'Code postal invalide.');
    isValid = false;
  }

  if (form.Adresse.value === '') {
    setErrorMessage(AdresseError, 'Veuillez saisir votre adresse.');
    isValid = false;
  }

  if (form.Ville.value === '') {
    setErrorMessage(VilleError, 'Veuillez saisir votre ville.');
    isValid = false;
  }

  if (form.Email.value === '') {
    setErrorMessage(EmailError, 'Veuillez saisir votre adresse e-mail.');
    isValid = false;
  } else if (!/^\S+@\S+\.\S+$/.test(form.Email.value)) {
    setErrorMessage(EmailError, 'Adresse e-mail invalide.');
    isValid = false;
  }

  if (form.sujet.value === '') {
    setErrorMessage(sujetError, 'Veuillez saisir le sujet de votre question.');
    isValid = false;
  }

  if (form['Votre question'].value === '') {
    setErrorMessage(VotreQuestionError, 'Veuillez saisir votre question.');
    isValid = false;
  }

  if (!isValid) {
    return false;
  }

  return true;
}

document.getElementById('submit-button').addEventListener('click', (event) => {
  if (!validateForm()) {
    event.preventDefault();
  }
});

 */

/* 7eme essai  */


/* document.addEventListener("DOMContentLoaded", function() {
 
  var form = document.getElementsByName("Contact")[0];

 
  form.addEventListener("submit", function(event) {

    var nomError = "";
    var prenomError = "";
    var femininError = "";
    var masculinError = "";
    var dateError = "";
    var CodePostalError = "";
    var AdresseError = "";
    var VilleError = "";
    var EmailError = "";
    var sujetError = "";
    var VotreQuestionError = "";

   
    if (form.nom.value === "") {
      nomError = "Veuillez entrer votre nom.";
    }

    
    if (form.prenom.value === "") {
      prenomError = "Veuillez entrer votre prénom.";
    }

 
    if (form.Genre[0].checked === false && form.Genre[1].checked === false) {
      femininError = "Veuillez sélectionner votre genre.";
      masculinError = "";
    } else {
      femininError = "";
      masculinError = "";
    }

    
    if (form.ddn.value === "") {
      dateError = "Veuillez entrer votre date de naissance.";
    }

   
    if (form.CodePostal.value === "") {
      CodePostalError = "Veuillez entrer votre code postal.";
    } else if (form.CodePostal.value.length !== 5 || isNaN(form.CodePostal.value)) {
      CodePostalError = "Veuillez entrer un code postal valide.";
    }


    if (form.Adresse.value === "") {
      AdresseError = "Veuillez entrer votre adresse.";
    }


    if (form.Ville.value === "") {
      VilleError = "Veuillez entrer votre ville.";
    }

    
    var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (form.Email.value === "") {
      EmailError = "Veuillez entrer votre email.";
    } else if (!emailRegex.test(form.Email.value)) {
      EmailError = "Veuillez entrer un email valide.";
    }

    
    if (form.sujet.value === "") {
      sujetError = "Veuillez sélectionner un sujet.";
    }

    
    if (form.VotreQuestion.value === "") {
      VotreQuestionError = "Veuillez entrer votre question.";
    }

    
    document.getElementById("error-nom").innerHTML = nomError;
    document.getElementById("error-prenom").innerHTML = prenomError;
    document.getElementById("error-feminin").innerHTML = femininError;
    document.getElementById("error-masculin").innerHTML = masculinError;
    document.getElementById("error-date").innerHTML = dateError;
    document.getElementById("error-CodePostal").innerHTML = CodePostalError;
    document.getElementById("error-Adresse").innerHTML = AdresseError;
    document.getElementById("error-Ville").innerHTML = VilleError;
    document.getElementById("error-Email").innerHTML = EmailError;
    document.getElementById("error-sujet").innerHTML = sujetError;
    document.getElementById("error-VotreQuestion").innerHTML = VotreQuestionError;

    
    if (nomError !== "" || prenomError !== "" || femininError !== "" || masculinError !== "" ||
      dateError !== "" || CodePostalError !== "" || AdresseError !== "" || VilleError !== "" ||
      EmailError !== "" || sujetError !== "" || VotreQuestionError !== "") {
      event.preventDefault();
    }
  });
}); */

              /* 8eme essai */

/* function validateForm() {

  const nom = document.forms["Contact"]["nom"];
  const prenom = document.forms["Contact"]["prenom"];
  const genre = document.forms["Contact"]["Genre"];
  const date = document.forms["Contact"]["date"];
  const CodePostal = document.forms["Contact"]["Codepostal"];
  const Adresse = document.forms["Contact"]["Adresse"];
  const Ville = document.forms["Contact"]["Ville"];
  const Email = document.forms["Contact"]["Email"];
  const sujet = document.forms["Contact"]["sujet"];
  const VotreQuestion = document.forms["Contact"]["Votre question"];

  const errorNom = document.getElementById("error-nom");
  const errorPrenom = document.getElementById("error-prenom");
  const errorGenre = document.getElementsByClassName("error-genre");
  const errorDate = document.getElementById("error-date");
  const errorCodePostal = document.getElementById("error-CodePostal");
  const errorAdresse = document.getElementById("error-Adresse");
  const errorVille = document.getElementById("error-Ville");
  const errorEmail = document.getElementById("error-Email");
  const errorSujet = document.getElementById("error-sujet");
  const errorVotreQuestion = document.getElementById("error-VotreQuestion");

  const errMsgNom = "Veuillez saisir votre nom.";
  const errMsgPrenom = "Veuillez saisir votre prénom.";
  const errMsgGenre = "Veuillez sélectionner votre genre.";
  const errMsgDate = "Veuillez saisir votre date de naissance.";
  const errMsgCodePostal = "Veuillez saisir un code postal valide.";
  const errMsgAdresse = "Veuillez saisir votre adresse.";
  const errMsgVille = "Veuillez saisir votre ville.";
  const errMsgEmail = "Veuillez saisir une adresse email valide.";
  const errMsgSujet = "Veuillez sélectionner un sujet.";
  const errMsgVotreQuestion = "Veuillez saisir votre question.";

  if (nom.value === "") {
      errorNom.textContent = errMsgNom;
      nom.focus();
      return false;
  } else {
      errorNom.textContent = "";
  }

  if (prenom.value === "") {
      errorPrenom.textContent = errMsgPrenom;
      prenom.focus();
      return false;
  } else {
      errorPrenom.textContent = "";
  }

  if (genre[0].checked === false && genre[1].checked === false) {
      errorGenre[0].textContent = errMsgGenre;
      errorGenre[1].textContent = errMsgGenre;
      return false;
  } else {
      errorGenre[0].textContent = "";
      errorGenre[1].textContent = "";
  }

  if (date.value === "") {
      errorDate.textContent = errMsgDate;
      date.focus();
      return false;
  } else {
      errorDate.textContent = "";
  }

  if (CodePostal.value === "") {
      errorCodePostal.textContent = errMsgCodePostal;
      CodePostal.focus();
      return false;
  } else if (!CodePostal.value.match(/^[0-9]{5}$/)) {
      errorCodePostal.textContent = errMsgCodePostal;
      CodePostal.focus();
      return false;
  } else {
      errorCodePostal.textContent ="";
  }

  if (Adresse.value === "") {
      errorAdresse.textContent = errMsgAdresse;
      Adresse.focus();
      return false;
  } else {
      errorAdresse.textContent = "";
  }

  if (Ville.value === "") {
      errorVille.textContent = errMsgVille;
      Ville.focus();
      return false;
  } else {
      errorVille.textContent = "";
  }

  if (Email.value === "") {
      errorEmail.textContent = errMsgEmail;
      Email.focus();
      return false;
  } else if (!Email.value.match(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/)) {
      errorEmail.textContent = errMsgEmail;
      Email.focus();
      return false;
  } else {
      errorEmail.textContent = "";
  }

  if (sujet.value === "") {
      errorSujet.textContent = errMsgSujet;
      sujet.focus();
      return false;
  } else {
      errorSujet.textContent = "";
  }

  if (VotreQuestion.value === "") {
      errorVotreQuestion.textContent = errMsgVotreQuestion;
      VotreQuestion.focus();
      return false;
  } else {
      errorVotreQuestion.textContent = "";
  }

  alert("Formulaire envoyer avec succes");
  return true;
} */