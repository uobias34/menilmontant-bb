<?php
  session_start(); // Démarrage de la session si ce n'est pas déjà fait
  $variables = require_once __DIR__ . '/variables.php';
  $activePage = 'contact'; // Définissez la page active ici
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Saïbou DIABIRA">
  <meta name="generator" content="Hugo 0.115.4">
  <title>Menilmontant Paris Sports</title>



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Helvetica" />
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="assets/css/contact.css">
  <link rel="stylesheet" href="assets/css/carousel.css" >
  <link rel="icon" href="assets/images_mps/favicon_mps.ico" />

</head>

<body>



  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>

  <!-- Barre de navigation -->
  <?php include 'header.php'; ?>

  
  <main>


    <div class="container ">
      <section id="contact">
        <div class="text-center mt-5 pt-4">
          <img src="assets/images_mps/logo_rong.png" alt="" width="100" height="100">
        </div>
        <div class="py-5 ">
          <h1 class="fw-bold text-center mb-3">NOUS CONTACTER</h1>
          <p class="lead">Pour nous contacter, vous pouvez remplir le formulaire ci-dessous, ou adresser directement un e-mail à l’adresse <a href="mailto:menilmontantbb@gmail.com">menilmontantbb@gmail.com</a>.</p>
        </div>
        

    <?php
      // Vérifie si un message est passé dans l'URL
      if (isset($_SESSION['msg'])) {
          echo $_SESSION['msg']; // Affiche le message
      }
    ?>

        <div class="row featurette g-5">
          <form action="submit-contact.php" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-12  ">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control rounded-0" id="nom" name="nom" placeholder="" value="<?php if (isset($_SESSION['form_data']['nom'])) echo htmlspecialchars($_SESSION['form_data']['nom']); ?>" required>
                <div class="invalid-feedback">
                  Veuillez renseigner un nom.
                </div>
              </div>

              <div class="col-12">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control rounded-0" id="prenom" name="prenom" placeholder="" value="<?php if (isset($_SESSION['form_data']['prenom'])) echo htmlspecialchars($_SESSION['form_data']['prenom']); ?>" required>
                <div class="invalid-feedback">
                  Veuillez renseigner un prénom.
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Adresse e-mail </label>
                <input type="email" class="form-control rounded-0" id="email" name="email" placeholder="" value="<?php if (isset($_SESSION['form_data']['email'])) echo htmlspecialchars($_SESSION['form_data']['email']); ?>" required>
                <div class="invalid-feedback">
                  Veuillez renseigner une adresse mail valide.
                </div>
              </div>

              <div class="col-12">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="text" class="form-control rounded-0" id="telephone" name="telephone" placeholder="" value="<?php if (isset($_SESSION['form_data']['telephone'])) echo htmlspecialchars($_SESSION['form_data']['telephone']); ?>">
              </div>

              <div class="col-12">
                <label for="object" class="form-label">Objet </label>
                <input type="text" class="form-control rounded-0" id="object" name="object" placeholder="" value="<?php if (isset($_SESSION['form_data']['object'])) echo htmlspecialchars($_SESSION['form_data']['object']); ?>" required>
              </div>

              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3" required><?php
                 if (isset($_SESSION['form_data']['message'])) echo htmlspecialchars($_SESSION['form_data']['message']); 
                 ?></textarea>
                <div class="invalid-feedback">
                  Veuillez saisir un message.
                </div>
              </div>
              
              
              <div class="g-recaptcha" data-sitekey="6LemqwwqAAAAAFB1eM33dzuOL1_lZeo8UbOk9fsn"></div>
              <br/>
              
              <div class="col-3 mt-5">
                <button class="btn btn-primary btn-lg" type="submit" name="Envoyer"><u><strong>ENVOYER</strong></u></button>
              </div>

            </div>

          </form>
        </div>
      </section>





      <hr class="featurette-divider">


    </div>


    <?php include 'footer.php'; ?>


  </main>
  <script src="assets/css/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="assets/js/contact.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</body>

</html>

<?php
// Efface les données du formulaire de la session une fois affichées pour éviter de pré-remplir à nouveau après soumission
unset($_SESSION['form_data']);
unset($_SESSION['msg']);
?>