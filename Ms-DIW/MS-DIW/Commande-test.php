
<?php include 'header.php'; ?>

<main>
    <div id="form-container" class="container2">
        <h1 class="text-center" style="color: #FFFFFF;">Formulaire de Commande</h1><br>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <img src="../MS-DIW/images_the_district (1)/food/cheesburger.jpg" class="card-img-top"
                        alt="Image du produit">
                    <div class="card-body">
                        <h5 class="card-title">CheeseBurger</h5>
                        <p class="card-text">Description du produit</p>
                        <div class="input-group">
                            <button class="btn btn-outline-primary" type="button" id="decreaseQuantity">-</button>
                            <input type="text" class="form-control text-center" id="quantityInput" value="1" readonly>
                            <button class="btn btn-outline-primary" type="button" id="increaseQuantity">+</button>
                        </div>
                    </div>
              </div>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <form id="contactForm" novalidate action="form-handler.php" method="post">

                <div class="row mb-3 needs-validation">
                    <div class="col"><br>
                        <label for="nom" class="form-label" style="color: #FFFFFF;">Nom et Prenom*</label>
                        <input type="text" class="form-control" id="nometprenom" name="nometprenom" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <small class="text-danger validation-message">*Ce champ est obligatoire</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="email" class="form-label" style="color: #FFFFFF;">Email*</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <div class="invalid-feedback">
                            Entrer une adresse e-mail valide.
                        </div>
                        <small class="text-danger validation-message">*Ce champ est obligatoire</small>
                    </div>
                    <div class="col">
                        <label for="telephone" class="form-label" style="color: #FFFFFF;">Téléphone*</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone"
                            pattern="[0-9]{10}" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <small class="text-danger validation-message">*Ce champ est obligatoire et doit
                            contenir
                            10 chiffres.</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="adresse" class="form-label" style="color: #FFFFFF;">Adresse*</label>
                        <textarea class="form-control" id="adresse" name="adresse" rows="3"
                            required></textarea>
                        <div class="valid-feedback">
                            Looks good!
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
    </div>

    <div class="modal fade" id="quantityModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Quantité</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="number" class="form-control" placeholder="Quantité" min="1" max="10">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Ajouter</button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

