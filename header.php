<header data-bs-theme="dark">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-mps-blue">
      <div class="container-fluid">
        <!-- Logo et navigation principale -->
        <img id="header-logo" class="navbar-brand  ms-3" src="<?= htmlspecialchars($variables['logo']) ?>" alt="Menilmontant" width="85" height="95">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarCollapse">
          <ul class="navbar-nav mb-2 mb-md-0 h3">
            <li class="nav-item me-3">
                  <a class="nav-link <?= ($activePage === 'accueil') ? 'active' : '' ?>" aria-current="page" href="index.php">Accueil</a>
            </li>
            <li class="nav-item me-3">
                  <a class="nav-link <?= ($activePage === 'inscriptions') ? 'active' : '' ?>" href="index.php#inscriptions">Inscriptions</a>
            </li>
            <li class="nav-item me-3">
                  <a class="nav-link <?= ($activePage === 'planning') ? 'active' : '' ?>" href="index.php#planning">Planning</a>
            </li>
            <li class="nav-item me-3">
                  <a class="nav-link <?= ($activePage === 'boutique') ? 'active' : '' ?>" href="index.php#boutique">Boutique</a>
            </li>
            <li class="nav-item me-3">
                  <a class="nav-link <?= ($activePage === 'contact') ? 'active' : '' ?>" href="contact.php">Contact</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>