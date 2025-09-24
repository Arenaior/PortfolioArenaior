<?php include("navbar.php"); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio Arenaior</title>
  <style>
    body {
      background-color:#1F1F1F;
      font-family: Arial;color: white;
    }

    .container1 {
      background-image: url("../images/p1.JPEG");
      background-size: cover;
      background-repeat: no-repeat;
      height: 500px0vh;
      aspect-ratio: 25 / 15;
      font-family: 'Arial', sans-serif;
      position: relative;
      overflow: hidden;
    }

    /* Animation depuis la gauche */
    .container1 h1,
    .container1 p,
    .container1 a {
      opacity: 0;
      transform: translateX(-100%);
      animation: slideIn 1s forwards;
    }

    .container1 p {
      animation-delay: 0.3s; /* texte après le h1 */
    }

    .container1 a {
      animation-delay: 0.6s; /* bouton après le texte */
    }

    @keyframes slideIn {
      to {
        transform: translateX(0);
        opacity: 1;
      }
    }

    .container1-title {
      position: absolute;
      color:white;
      top:30%;
      left:15%;
      font-size:50px;
    }

    @media screen and (max-width: 1000px) {
      .container1-title {
        font-size: 100%;
        left: 10%;
      }
    }

    .container1-text {
      position: absolute;
      color:white;
      top:35%;
      left:16%;
      font-size:50px;
    }

    @media screen and (max-width: 1000px) {
      .container1-text {
        font-size: 100%;
        left: 10%;
        top: 40%;
      }
    }

    .container1-btn {
      position: absolute;
      color:black;
      top:48%;
      left:16%;
      font-size:20px;
      background-color: #FCFCFC;
      padding: 8px 16px;
      border-radius: 5px;
      text-decoration: none;
    }

    @media screen and (max-width: 1700px) {
      .container1-btn {
        font-size: 90%;
        left: 10%;
        top: 60%;
        padding: 1.5% 4%;
      }
    }

    /* ---------------- Container 2 ---------------- */
    .container2 {
      background-color: #1F1F1F;
      color: white;
      padding: 20px;
      text-align: center;
      font-family: 'Arial', sans-serif;
    }

    .container2 h1 {
      font-size: 36px;
      margin-bottom: 8px;
      line-height: 1.1;
    }

    .container2 p {
      font-size: 12px;
      margin: 4px 0;
      line-height: 1.2;
    }

    @media screen and (max-width: 1000px) {
      .container2 h1 {
        font-size: 28px;
      }
      .container2 p {
        font-size: 16px;
      }
    }

    .cards-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
  }

  .card {
    background-color: #2A2A2A;
    border-radius: 10px;
    padding: 20px;
    width: 220px;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.5);
  }

  .card img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 15px;
  }

  .card h3 {
    margin-bottom: 10px;
  }

  .card p {
    font-size: 14px;
    line-height: 1.4;
  }

  /* Responsive pour mobile */
  @media screen and (max-width: 800px) {
    .cards-container {
      flex-direction: column;
      align-items: center;
    }

    .card {
      width: 90%;
    }
  }

  a.no-style {
    text-decoration: none; /* enlève le soulignement */
    color: inherit;        /* garde la couleur du texte environnant */
}

/* Conteneur principal */
.contact-container {
  display: flex;
  background: white;
  border-radius: 10px;
  box-shadow: 0 6px 25px rgba(0,0,0,0.15);
  overflow: hidden;
  width: 1000px; /* plus large qu'avant */
  max-width: 95%;
  margin-left:100px;
}

/* Partie gauche */
.contact-info {
  background: #303030ff;
  color: white;
  padding: 60px; /* plus d’espace */
  flex: 1;
}

.contact-info h2 {
  font-size: 28px; /* plus grand */
  margin-bottom: 30px;
}

.contact-info p {
  margin: 20px 0;
  font-size: 18px; /* plus grand */
}

.contact-info a {
  color: white;
  text-decoration: none;
  font-size: 18px;
}

/* Partie droite */
.contact-form {
  flex: 2;
  padding: 60px;
}

.contact-form h2 {
  margin-bottom: 15px;
  color: #050506ff;
  font-size: 30px;
}

.contact-form .subtitle {
  color: #555;
  font-size: 18px;
  margin-bottom: 30px;
}

.contact-form form {
  display: flex;
  flex-direction: column;
}

.contact-form input,
.contact-form textarea {
  margin-bottom: 20px;
  padding: 16px;
  border: 1px solid #ddd;
  border-radius: 6px;
  font-size: 18px; /* texte plus grand */
  outline: none;
}

.contact-form textarea {
  resize: none;
  height: 150px; /* plus grand */
}

/* Bouton */
.contact-form button {
  background: #000000ff;
  color: white;
  border: none;
  padding: 16px;
  border-radius: 30px;
  cursor: pointer;
  font-weight: bold;
  font-size: 18px; /* plus grand */
  transition: 0.3s;
}

.contact-form button:hover {
  background: #3d3d3dff;
}

  
  </style>
</head>
<body>
  <div class="container1">
    <h1 class="container1-title">Bonjour,</h1>
    <p class="container1-text">Je suis Arena Randrianaina</p>
    <a href="CV-Arena.pdf" class="container1-btn">Voir mon CV </a>
  </div>

  <div class="container2">
    <h1>Bienvenue sur mon portfolio</h1>
    <p>Je suis un étudiant en BTS SIO passionné par le développement web</p>
    <p>Découvrez mes projets et compétences.</p>
  </div>

  <center><h1>Mes Projets</h1></center>

<div class="cards-container">
  <a href="supercar.php"  class="no-style">
    <div class="card">
    <img src="../images/barre-logo.PNG" alt="Projet 1">
    <h3>Supercar</h3>
    <p>Supercar est un site de concessionnaire permettant de réserver des essais et d’envoyer des messages. Les données sont stockées en base (essais, contacts) et gérées via une interface admin. Front-end responsive avec Bootstrap.</p>
  </div>
</a>

  <div class="card">
    <img src="../images/Gasik'Art.png" alt="Projet 2">
    <h3>Stage Première année</h3>
    <p>Stage : création d’une application de gestion de stock et de caisse pour une entreprise artisanale.
Fonctions : gérer produits, ventes, stock et accès admin sécurisé.</p>
  </div>

  <div class="card">
    <img src="../images/Java.jpg" alt="Projet 3">
    <h3>Pharmagest</h3>
    <p>Pharmagest est une application de gestion pharmaceutique qui permet de suivre les médicaments disponibles, leurs quantités en stock, les dates de péremption, ainsi que les ventes et les réapprovisionnements.</p>
  </div>

  <div class="card">
    <img src="https://via.placeholder.com/220x120" alt="Projet 4">
    <h3>Projet 4</h3>
    <p>Description courte de ton projet 4. Tu peux ajouter plus de texte ici.</p>
  </div>
</div>

<br><br><br><br>
<hr>
<!-- <h1> Comment me contacter ?</h1> -->
<br><br>

<div class="contact-container">
    
    <!-- Bloc gauche -->
    <div class="contact-info">
      <h2>Comment me contacter ?</h2>
      <p>📍 43Ave N.Dr Luckeernarain Plaisance<br>Rose Hill, Mauritius</p>
      <p>✉️ <a href="arenaiorenantsoa07@gmail.com">arenaiorenantsoa07@gmail.com</a></p>
      <p>📞 +230 59353043</p>
      <p>📞 +261 322824028</p>
    </div>

    <!-- Bloc droit -->
    <div class="contact-form">
      <h2>Contactez moi</h2>
      <p class="subtitle">Vous êtes libres de me laisser un message</p>
      <form>
        <input type="text" name="name" placeholder="Votre nom" required>
        <input type="email" name="email" placeholder="Votre email" required>
        <textarea name="message" placeholder="Écrivez votre message ici..." required></textarea>
        <button type="submit">Envoyer</button>
      </form>
    </div>
  </div>



</body>
</html>
