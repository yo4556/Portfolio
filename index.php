<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta name="description" content="Portfolio de Yoan Deloustal, développeur créatif junior et étudiant en Métiers du Multimédia et de l'Internet (MMI)">
  <meta name="keywords" content="développeur web, portfolio, multimedia, MMI, créatif, Yoan Deloustal">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" type="image/png" href="content/favicon.png">
  <title>Portfolio - Yoan Deloustal | Développeur Créatif</title>
</head>

<body>
  <header id="slide0">
    <div class="video-container">
      <video class="video" autoplay muted loop playsinline>
        <source src="content/nyan.mp4" type="video/mp4">
      </video>
      <div class="overlay">
        <h1>Yoan DELOUSTAL</h1>
        <h3>Développeur créatif junior</h3>
        <a class="slide" href="#about"><i class="fas fa-chevron-down"></i> À propos de moi</a>
      </div>
    </div>
  </header>

  <nav class="main-nav">
    <div class="nav-container">
      <a href="#slide0" class="nav-logo">Yoan Deloustal</a>
      <div class="hamburger" id="hamburger-menu">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="nav-links">
        <a href="#about">À propos</a>
        <a href="#slide">Projets</a>
        <a href="#slide2">Contact</a>
      </div>
    </div>
  </nav>
  
  <section id="about">
    <h2>À propos de moi</h2>
    <div class="about-content">
      <div class="about-text">
        <p>Je suis Yoan Deloustal, étudiant en Métiers du Multimédia et de l'Internet (MMI), avec un intérêt particulier pour le développement web. Je me forme aux différentes compétences du numérique, allant de l'intégration front-end au développement back-end, en passant par la gestion de projets et le design web.</p>
        <div class="skills">
          <div class="skill-category">
            <h4><i class="fas fa-code"></i> Développement</h4>
            <div class="skill-list">
              <span>HTML/CSS</span>
              <span>JavaScript</span>
              <span>PHP</span>
              <span>MySQL</span>
            </div>
          </div>
          <div class="skill-category">
            <h4><i class="fas fa-paint-brush"></i> Design</h4>
            <div class="skill-list">
              <span>Photoshop</span>
              <span>Illustrator</span>
              <span>Figma</span>
              <span>UI/UX</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="slide" href="#slide"><i class="fas fa-project-diagram"></i> Voir mes projets</a>
  </section>
  
  <main id="slide">
    <div class="projects-intro">
      <h2>Mes réalisations</h2>
      <p>
        En tant que développeur créatif junior, j'ai acquis de l'expérience à travers plusieurs projets personnels et
        académiques. Voici une sélection de réalisations :
      </p>
    </div>
    <div id="real">
      <a href="travaux/projet1.html">
        <div class="projets1">
          <div class="project-overlay">
            <h3>Site personnel</h3>
            <p>Conception et développement de mon site portfolio</p>
            <span class="view-project">Voir le projet <i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>
      <a href="travaux/projet2.html">
        <div class="projets2">
          <div class="project-overlay">
            <h3>SAE 203</h3>
            <p>Projet académique axé sur le développement web</p>
            <span class="view-project">Voir le projet <i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>
      <a href="#">
        <div class="projets3">
          <div class="project-overlay">
            <h3>En cours</h3>
            <p>Projet en développement actuel</p>
            <span class="view-project">Bientôt disponible <i class="fas fa-hourglass-half"></i></span>
          </div>
        </div>
      </a>
    </div>
    <a class="slide" href="#slide2"><i class="fas fa-envelope"></i> Contactez-moi</a>
  </main>
  
  <footer id="slide2">
    <section id="contact">
      <h2 id="formulaire">Me contacter</h2>
      
      <div class="contact-container">
        <div class="contact-form-wrapper">
          <form action="send_mail.php" method="POST" class="contact-form">
            <div class="form-group">
              <label for="name"><i class="fas fa-user"></i> Nom</label>
              <input type="text" id="name" name="name" placeholder="Votre nom" required>
            </div>
            <div class="form-group">
              <label for="email"><i class="fas fa-envelope"></i> Email</label>
              <input type="email" id="email" name="email" placeholder="Votre email" required>
            </div>
            <div class="form-group">
              <label for="message"><i class="fas fa-comment"></i> Message</label>
              <textarea id="message" name="message" placeholder="Votre message" required></textarea>
            </div>
            <input type="text" name="website" style="display: none">
            <button type="submit"><i class="fas fa-paper-plane"></i> Envoyer</button>
          </form>
        </div>
        
        <div class="contact-info-wrapper">
          <div class="footer-contact-info">
            <h3>Coordonnées</h3>
            <div class="contact-info-list">
              <p><i class="fas fa-envelope"></i> <strong>Email :</strong> <a href="mailto:yoandeloustal45@gmail.com">yoandeloustal45@gmail.com</a></p>
              <p><i class="fab fa-linkedin"></i> <strong>LinkedIn :</strong> <a href="https://www.linkedin.com/in/yoan-deloustal-a10045337/" target="_blank" rel="noopener noreferrer">Yoan Deloustal</a></p>
              <p><i class="fas fa-map-marker-alt"></i> <strong>Localisation :</strong> Troyes</p>
            </div>
            
            <div class="contact-divider"></div>
            
            <div class="contact-social">
              <h4>Mon réseau professionnel</h4>
              <div class="contact-social-icons">
                <a href="https://www.linkedin.com/in/yoan-deloustal-a10045337/" target="_blank" rel="noopener noreferrer" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <div class="footer-bottom">
      <div class="footer-container">
        <p>&copy; 2025 Deloustal Yoan. Tous droits réservés.</p>
        <div class="social-icons">
          <a href="https://www.linkedin.com/in/yoan-deloustal-a10045337/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bouton retour en haut de page fixe -->
  <a href="#slide0" class="back-to-top" id="backToTop">
    <i class="fas fa-arrow-up"></i>
  </a>

  <script>
    // Navigation collante
    window.addEventListener('scroll', function() {
      const nav = document.querySelector('.main-nav');
      if (window.scrollY > 100) {
        nav.classList.add('nav-scrolled');
      } else {
        nav.classList.remove('nav-scrolled');
      }
      
      // Afficher/cacher le bouton de retour en haut
      const backToTop = document.getElementById('backToTop');
      if (window.scrollY > 300) {
        backToTop.classList.add('visible');
      } else {
        backToTop.classList.remove('visible');
      }
    });

    // Hamburger menu
    const hamburger = document.getElementById('hamburger-menu');
    const nav = document.querySelector('.main-nav');
    const navLinks = document.querySelectorAll('.nav-links a');

    // Toggle menu when hamburger is clicked
    hamburger.addEventListener('click', function() {
      nav.classList.toggle('nav-open');
      document.body.classList.toggle('menu-open');
    });

    // Close menu when a nav link is clicked
    navLinks.forEach(link => {
      link.addEventListener('click', function() {
        nav.classList.remove('nav-open');
        document.body.classList.remove('menu-open');
      });
    });
  </script>
</body>
</html>