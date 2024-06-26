<?php include 'header.php';?>

<main>
  <div class="container">
    <h1>Formulaire de Contact</h1>
    <form id="contactForm" novalidate action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <div class="row mb-3 needs-validation">
        <div class="col">
          <label for="nom" class="form-label">Nom*</label>
          <input type="text" class="form-control" id="nom" name="nom" required>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Veuillez Saisir Votre Nom
          </div>
          <small class="text-danger validation-message">*Ce champ est obligatoire</small>
        </div>
        <div class="col">
          <label for="prenom" class="form-label">Prénom*</label>
          <input type="text" class="form-control" id="prenom" name="prenom" required>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Veuillez Saisir Votre Prénom
          </div>
          <small class="text-danger validation-message">*Ce champ est obligatoire</small>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <label for="email" class="form-label">Email*</label>
          <input type="email" class="form-control" id="email" name="email" required>
          <div class="invalid-feedback">
           Veuillez Saisir une adresse e-mail valide.
          </div>
          <small class="text-danger validation-message">*Ce champ est obligatoire</small>
        </div>
        <div class="col">
          <label for="telephone" class="form-label">Téléphone*</label>
          <input type="tel" class="form-control" id="telephone" name="telephone" pattern="[0-9]{10}" required>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Veuillez Saisir Un Numeros de Téléphone Valide
          </div>
          <small class="text-danger validation-message">*Ce champ est obligatoire et doit contenir 10 chiffres</small>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <label for="question" class="form-label">Question*</label>
          <textarea class="form-control" id="question" name="question" rows="3" required></textarea>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Veuillez Saisir votre question
          </div>
          <small class="text-danger validation-message">*Ce champ est obligatoire</small>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
      </div>
    </form>
  </div>
</main>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $question = $_POST['question'];

  $date = date('Y-m-d-H-i-s');
  $filename = $date. '.txt';

  $file = fopen($filename, 'w');
  fwrite($file, "Nom : $nom\n");
  fwrite($file, "Prénom : $prenom\n");
  fwrite($file, "Email : $email\n");
  fwrite($file, "Téléphone : $telephone\n");
  fwrite($file, "Question : $question\n");
  fclose($file);

  echo "Les informations ont été enregistrées avec succès!";
}
?>

<?php include 'footer.php';?>