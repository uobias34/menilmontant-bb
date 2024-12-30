<?php
  $variables = require_once __DIR__ . '/variables.php';
  $activePage = 'accueil'; // Définissez la page active ici
?>


<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <!-- Configuration de base de la page -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Saï">
  <meta name="generator" content="Saï">
  <title>Menilmontant Paris Sports</title>

  <!-- Liens vers les fichiers CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Helvetica" />
  <link href="assets/css/custom.css" rel="stylesheet">
  <link href="assets/css/carousel.css" rel="stylesheet">
  <link href="assets/css/instagram.css" rel="stylesheet">

  <link rel="icon" href="<?= htmlspecialchars($variables['favicon']) ?>" />

</head>

<body>
  <!-- Inclusion des symboles SVG utilisés pour les icônes -->
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

    <div id="carousel-mps" class="carousel slide mb-6" data-bs-ride="carousel">
      <!-- Indicateurs pour les slides -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel-mps" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel-mps" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel-mps" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <!-- Contenu des slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= htmlspecialchars($variables['carousel'][0]) ?>" class="d-block w-100 h-100" />
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Suivez nous sur Instagram!</h1>
              <p class="opacity-100 bg-dark" style="--bs-bg-opacity: .1;">Retrouvez toutes les actualités du club sur le compte Instagram de @menilmontantbb.</p>
              <p><a class="btn btn-lg btn-primary" href="<?= htmlspecialchars($config['insta']['url_compte']) ?>">Nous suivre</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= htmlspecialchars($variables['carousel'][1]) ?>" class="d-block w-100 h-100" />

          <div class="container">
            <div class="carousel-caption">
              <h1>Inscriptions 2024-2025</h1>
              <p>Le formulaire d'inscription est disponible.</p>
              <p><a class="btn btn-lg btn-primary" href="<?= htmlspecialchars($variables['documents'][0]) ?>" target="_blank">Télécharger</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= htmlspecialchars($variables['carousel'][2]) ?>" class="d-block w-100 h-100" />

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Planning 2024-2025</h1>
              <p class="opacity-100 bg-dark" style="--bs-bg-opacity: .1;">Le nouveau planning est disponible.</p>
              <p><a class="btn btn-lg btn-primary" href="<?= htmlspecialchars($variables['documents'][1]) ?>" target="_blank">Télécharger</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carousel-mps" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel-mps" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <div class="container marketing">

      <?php
      require 'vendor/autoload.php';
      // Chargement des stories Instagram depuis l'URL configurée
      $json_stories = @file_get_contents($variables['json_stories_url']);
      $contents = json_decode($json_stories, true, 512, JSON_BIGINT_AS_STRING);
      $stories = $contents["stories"];
      // Vérification et traitement des données récupérées
      if (!empty($stories)) {

        $stories_recuperes = 0;
        $fruits = array();
        $stories_urls = array();

        foreach ($stories["data"] as $story) {
          // Récupération des informations pour chaque story
          $story_id = $story["id"];
          $json_story_url = sprintf($variables['json_story_url'], $story_id);
          $json_story = @file_get_contents($json_story_url);

          $contents = json_decode($json_feed, true, 512, JSON_BIGINT_AS_STRING);

          $story_content = json_decode($json_story, true, 512, JSON_BIGINT_AS_STRING);
          $video_url = $story_content["media_url"];
          $media_type = $story_content["media_type"];
          $content_type = $media_type == "VIDEO" ? "video/mp4" : "image/jpg";
          // ajouter l'url au debut du tableau
          $story_to_add = ["contentUrl" => $video_url, "contentType" => $content_type, "mediaType" => $media_type];
          array_unshift($stories_urls, $story_to_add);
        }
      }

      ?>


      <?php if (!empty($stories_urls)) { ?>

        <div class="text-center blink_me mb-3">
          <button type="button" class="btn btn-lg btn-mps-blue position-relative "
            data-bs-toggle="modal" data-bs-target="#myModal">
            <img class="blink" src="<?= htmlspecialchars($variables['insta_brand']) ?>" width="50"></i>
            Stories
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              <?php echo sizeof($stories_urls) ?> vidéo(s)
              <span class="visually-hidden">unread messages</span>
            </span>
          </button>
        </div>

        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-dialog">
              <div class="modal-content">

                <div class="modal-body embed-responsive">
                  <div class="item previews-container img-responsive">
                  </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-mps-blue" data-bs-dismiss="modal">Fermer</button>
                </div>

              </div>
            </div>
          </div>
        </div>

      <?php } ?>



      <div class="row featurette">
        <div>
          <h2 class="featurette-heading fw-normal lh-1">Rejoignez-nous sur les réseaux sociaux et suivez toute l’actualité de votre club :
            <span class="survol-image">
              <a target="_blank" and rel="noopener noreferrer"
                href="<?= htmlspecialchars($variables['insta_url']) ?>"><img class="blink" src="<?= htmlspecialchars($variables['insta_brand']) ?>" width="50"></i></a>

            </span>

          </h2>


          <?php
          require 'vendor/autoload.php';

          $limit = 9;

          $json_feed = @file_get_contents($variables['json_feed_url']);
          $contents = json_decode($json_feed, true, 512, JSON_BIGINT_AS_STRING);


          $posts_recuperes = 0;
          echo "<div class='ig_post_container mt-5'>";
          foreach ($contents["data"] as $post) {

            if ($posts_recuperes == 9) {
              break;
            }
            if (isset($post["media_product_type"]) && $post["media_product_type"] == "FEED") {
              $posts_recuperes += 1;

              $media_url = isset($post["media_url"]) ? $post["media_url"] : "";
              $permalink = isset($post["permalink"]) ? $post["permalink"] : "";


              echo "<a href='{$permalink}' target='_blank'><img class='box' src='{$media_url}' /></a>";
            }
          }
          echo "</div>"
          ?>


        </div>
      </div>

      <hr class="featurette-divider">

      <!-- Three columns of text below the carousel -->
      <section id="reglement-interieur">
        <div class="row">
          <h2 class="featurette-heading fw-normal lh-1">
            Règlement Intérieur de Ménilmontant Paris Sports.</span></h2>
          <!-- <h2 class="display-6 text-success">Le dossier est à remettre directement à l'entraineur en charge de la catégorie:</h3> -->
          <p class="display-6"><a href="<?= htmlspecialchars($variables['documents'][2]) ?>">Cliquez ici pour télécharger le règlement intérieur.</a></p>
        </div><!-- /.row -->
      </section>

      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">

      <!-- Three columns of text below the carousel -->
      <section id="inscriptions">
        <div class="row">
          <h2 class="featurette-heading fw-normal lh-1">Formulaire d'inscription pour la saison <span class="text-body-secondary text-mps-blue">2024-2025.</span></h2>
          <h2 class="display-6 text-success">Le dossier est à remettre directement à l'entraineur en charge de la catégorie:</h3>
            <p class="display-6"><a href="<?= htmlspecialchars($variables['documents'][0]) ?>" target="_blank">Cliquez ici pour télécharger le formulaire d'inscription.</a></p>
        </div>
      </section>

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <section id="planning">
        <div class="row featurette">
          <div class="row">

            <h2 class="featurette-heading fw-normal lh-1">Planning des entrainements <span class="text-body-secondary text-mps-blue">2024-2025.</span></h2>
            <p class="display-6"><a href="<?= htmlspecialchars($variables['documents'][0]) ?>" target="_blank">Cliquez ici pour télécharger le planning.</a></p>
            </object>
          </div>
        </div>
      </section>

      <hr class="featurette-divider">

      <section id="boutique">
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <!-- <h2 class="featurette-heading fw-normal lh-1">Nos nouveaux équipements seront bientôt disponibles en précommande! 
        </h2> -->
            <p class="display-6"><a href="<?= htmlspecialchars($variables['boutique_url']) ?>">Acceder à la boutique.</a></p>
          </div>
          <div class="col-md-5 order-md-1">
            <img src="assets/images_mps/maillot_bleu_back.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="1080" height="1350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">Maillot bleu</text></svg>
          </div>
        </div>
      </section>



      <hr class="featurette-divider">


    </div>


    <?php include 'footer.php'; ?>

  </main>
  <script src="/assets/css/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/jquery-3.7.1.min.js"></script>

  <script>
    var storyList = <?php echo json_encode($stories_urls); ?>;
    let count = 0;


    var previewContainer = $(".previews-container");
    var curIndex = 1;
    let isOpenedModal = true;


    //code executé à chaque fois qu'on ferme la modale des stories
    //revoir ce bout de code
    $("#myModal").on("hidden.bs.modal", function() {
      //todo : 
      // put your default event here
      isOpenedModal = false;
      previewContainer.html('');

    });

    $("#myModal").on("shown.bs.modal", function() {
      isOpenedModal = true;
      appendMediaElement(storyList[0]);
    });


    if (storyList) {

      // removed the setInterval but kept the function
      function changeMedia() {
        if (isOpenedModal) {
          //console.log('affichee ', count++);
          if (curIndex >= storyList.length) {
            // modified this so it would display the first image/video when looping
            curIndex = 0;
          }

          appendMediaElement(storyList[curIndex]);
          curIndex++;

        } else {
          curIndex = 0;
        }
      }

      //Au chargement de la page, ouvrir la modale des stories
      $(document).ready(function() {
        $('#myModal').modal('toggle');
      });


    }


    function appendMediaElement(asset) {
      var mediaEl = "";
      if (asset.mediaType == "IMAGE") {
        mediaEl = "<img id='lp-preview-image' src='" + asset.contentUrl + "' style='border-radius: 20px;' width='100%' >";
        previewContainer.html(mediaEl);
        // image: go to the next media after 5 seconds
        setTimeout("changeMedia()", 5000);
      } else if (asset.mediaType == "VIDEO") {
        mediaEl = "<video id='lp-preview-video' autoplay controls style='border-radius: 20px;' width='100%'>";
        mediaEl += "<source src='" + asset.contentUrl + "' type='" + asset.contentType + "'>";
        mediaEl += "</video>";
        previewContainer.html(mediaEl);
        // video: go to the next media when the video ends
        document.getElementById("lp-preview-video").addEventListener("ended", function(e) {
          changeMedia();
        });
      }

    }
  </script>

</body>

</html>