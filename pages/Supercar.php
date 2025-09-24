<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cards avec boutons</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      color: #333;
    }

    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 20px;
    }

    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
    }

    .card {
      background: white;
      border-radius: 16px;
      padding: 20px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: transform 0.2s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h3 {
      margin-top: 0;
      font-size: 22px;
      color: #111;
    }

    .card p {
      flex-grow: 1;
      font-size: 15px;
      color: #555;
    }

    .card .btn {
      margin-top: 20px;
      background-color: #111;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      text-decoration: none;
      text-align: center;
      font-size: 14px;
      cursor: pointer;
    }

    .card .btn:hover {
      background-color: #333;
    }
  </style>
</head>
<body>
  <div class="container">
    <H1> Bienvenue dans le projet SUPERCAR</H1>
    <br>
    <p> Ce projet est un projet à faire par groupe en 2 années d'étude et a permit l'apprentissage de la gestion de projet, de l'architecture logicielle et du développement web. </p>
    <br>
    <div class="cards">
      <div class="card">
        <h3>Contexte</h3>
        <p>Voir le contexte pour mieux comprendre les demandes et le fonctionnement</p>
        <a href="../../Contexte Supercar.pdf" class="btn"> Voir le contexte</a>
      </div>

      <div class="card">
        <h3>Présentation</h3>
        <p>Voir en résumé le fonctionnement du site</p>
        <a href="../PROJET-SUPERCAR.pdf" class="btn">Voir la présentation</a>
      </div>

      <div class="card">
        <h3>Projet</h3>
        <p>Voir le site et son fonctionnement </p>
        <a href="../../supercar_project/Pages/Accueil/accueil.php" class="btn">Supercar</a>
      </div>
      </div>
    </div>
  </div>
</body>
</html>
