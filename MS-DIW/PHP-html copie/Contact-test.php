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
          <small class="text-danger validation-message">*Ce champ est obligatoire</small>
        </div>
        <div class="col">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" id="prenom" name="prenom">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email">
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>
        <div class="col">
          <label for="telephone" class="form-label">Téléphone*</label>
          <input type="tel" class="form-control" id="telephone" name="telephone" pattern="[0-9]{10}" required>
          <div class="valid-feedback">
            Looks good!
          </div>
          <small class="text-danger validation-message">*Ce champ est obligatoire et doit contenir 10 chiffres.</small>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <label for="adresse" class="form-label">Adresse</label>
          <textarea class="form-control" id="adresse" name="adresse" rows="3"></textarea>
          <div class="valid-feedback">
            Looks good!
          </div>
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
  $adresse = $_POST['adresse'];

  $date = date('Y-m-d-H-i-s');
  $filename = $date. '.txt';

  $file = fopen($filename, 'w');
  fwrite($file, "Nom : $nom\n");
  fwrite($file, "Prénom : $prenom\n");
  fwrite($file, "Email : $email\n");
  fwrite($file, "Téléphone : $telephone\n");
  fwrite($file, "Adresse : $adresse\n");
  fclose($file);

  echo "Les informations ont été enregistrées avec succès!";
}
?>

<?php include 'footer.php';?>


<?php include 'header.php'; ?>

<main>
  </div><br>
  <div class="container">
    <h1>Formulaire de Contact</h1>
    <form id="contactForm" novalidate>
      <div class="row mb-3 needs-validation">
        <div class="col">
          <label for="nom" class="form-label">Nom*</label>
          <input type="text" class="form-control" id="nom" name="nom" required>
          <div class="valid-feedback">
            Looks good!
          </div>
          <small class="text-danger validation-message">*Ce champ est obligatoire</small>
        </div>
        <div class="col">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" id="prenom" name="prenom">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email">
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>
        <div class="col">
          <label for="telephone" class="form-label">Téléphone*</label>
          <input type="tel" class="form-control" id="telephone" name="telephone" pattern="[0-9]{10}" required>
          <div class="valid-feedback">
            Looks good!
          </div>
          <small class="text-danger validation-message">*Ce champ est obligatoire et doit contenir 10 chiffres.</small>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <label for="adresse" class="form-label">Adresse</label>
          <textarea class="form-control" id="adresse" name="adresse" rows="3"></textarea>
          <div class="valid-feedback">
            Looks good!
          </div>
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


<?php include 'footer.php'; ?>