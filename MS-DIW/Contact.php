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
          <input type="text" class="form-control" id="prenom" name="prenom" required>
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
          <textarea class="form-control" id="adresse" name="adresse" rows="3" required></textarea>
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