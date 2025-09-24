<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio Arenaior</title>
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background-color: #1e1e1e;
      color: white;
    }

    .hero {
      display: flex;
      justify-content: space-between;
      align-items: stretch; /* Pour que les enfants prennent toute la hauteur */
      background: linear-gradient(to right, #1e1e1e 50%, #f5b23f 50%);
      height: 500px;
      padding: 60px;
      position: relative;
    }

    .hero-text {
      max-width: 50%;
      align-self: center;
    }

    .hero-text h1 {
      font-size: 48px;
      color: #f5b23f;
    }

    .hero-text p {
      font-size: 20px;
      color: #ccc;
    }

    .btn {
      padding: 10px 20px;
      margin-top: 20px;
      background-color: transparent;
      border: 2px solid #f5b23f;
      color: #f5b23f;
      cursor: pointer;
      text-decoration: none;
    }

    .hero-img {
      position: absolute;
      right: 40px; /* espace avec le bord droit */
      bottom: 0;   /* colle en bas */
      height: 520px; /* plus grand que la hauteur de la section */
      transform: translateX(-40px); /* décale légèrement vers la gauche */
    }

    @media screen and (max-width:900px){
      .hero{
        width: 50%;
      }
      
    }media

    @media screen and (max-width:900px){
      .hero-img{
        width: 50%;
        height:50%;
      }
      
    }media

    .about {
      display: flex;
      align-items: center;
      padding: 60px;
      background-color: #2a2a2a;
    }

    .about img {
      max-width: 200px;
      margin-right: 40px;
      border: 4px solid #f5b23f;
    }

    .services {
      padding: 60px;
      text-align: center;
    }

    .services h2 {
      font-size: 36px;
      margin-bottom: 30px;
    }

    .service-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    .service-box {
      padding: 20px;
      border-radius: 10px;
      color: #fff;
    }

    .ux { background-color: #3daff3; }
    .web { background-color: #f5b23f; color: #000; }
    .app { background-color: #e94e77; }
    .design { background-color: #2ecc71; }

    /* Enlève soulignement + hérite du style du div */
.service-grid a {
  text-decoration: none;
  display: block;
}

/* Évite toute modification au survol */
.service-grid a:hover .service-box {
  transform: none;
  filter: none;
  box-shadow: none;
}

/* Fixe le style de la box même en lien */
.service-box {
  transition: none;
}

  </style>
</head>
<body>

  <section class="hero">
    <div class="hero-text">
      <p>Bonjour</p>
      <h1>Je suis Arena</h1>
      <p>Étudiant en web Designer & Developer</p>
      <a href="#" class="btn">Contactez-moi</a>
    </div>
    <img class="hero-img" src="../images/Arena.PNG" alt="Michael">
  </section>

  <section class="about">
    <img src="../images/Arena2.jpg" alt="Arenaior">
    <div>
      <h2>À propos de moi </h2>
      <p>Curieux, motivé et toujours prêt à apprendre, je construis des projets concrets pour monter en compétence.</p>
      <a href="../CV-Arena.pdf" class="btn">Voir mon CV</a>
      <a href="#" class="btn">M'envoyer des commentaires</a>
    </div>
  </section>

  <section class="services">
    <h2>Mes projets</h2>
    <div class="service-grid">
     <a href="supercar.php">
       <div class="service-box ux">
        <h3>Supercar</h3>
        <p>Projet orienté en développement web</p>
      </div>
      </a>
      
      <a href="#">
        <div class="service-box web">
        <h3>Pharmagest</h3>
        <p>Projet orienté vers la programmation Java</p>
      </div>
      </a>
      
      <a href="#"> 
        <div class="service-box app">
        <h3>Stage 1</h3>
        <p>Stage de première année orientée en développement web</p>
      </div>
      </a>

      <a href="#">
      <div class="service-box design">
        <h3>Stage 2</h3>
        <p>Stage de première année orientée en programmation Java.</p>
      </div>
      </a>
    </div>
  </section>

</body>
</html>
