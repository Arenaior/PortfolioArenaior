<style>
  /* --- Navbar centrée horizontalement --- */
  .navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    align-items: center;
    padding: 10px 20px;
    z-index: 1000;
    background: transparent;
    color: white;
    font-family: Arial, sans-serif;
  }

  .navbar-logo {
    font-size: 24px;
    font-weight: bold;
  }

  .navbar-links {
    list-style: none;
    display: flex;
    gap: 30px; /* espace entre les liens */
    margin: 0 auto; /* centre le bloc horizontalement */
    padding: 0;
  }

  .navbar-links li a {
    text-decoration: none;
    color: white;
    font-size: 18px;
    transition: color 0.3s;
  }

  .navbar-links li a:hover {
    color: #FFD700;
  }

  /* Hamburger menu */
  .hamburger {
    display: none;
    flex-direction: column;
    gap: 5px;
    cursor: pointer;
  }

  .hamburger div {
    width: 25px;
    height: 3px;
    background-color: white;
  }

  /* Responsive */
  @media screen and (max-width: 800px) {
    .navbar {
      padding: 10px 15px;
    }

    .navbar-links {
      display: none;
      position: fixed;
      top: 60px;
      right: 0;
      background-color: rgba(0,0,0,0.9);
      width: 180px;
      flex-direction: column;
      padding-top: 20px;
      gap: 15px;
      text-align: center;
      margin: 0; /* supprime le auto sur mobile */
    }

    .navbar-links.active {
      display: flex;
    }

    .hamburger {
      display: flex;
    }
  }
</style>

<nav class="navbar">
  <div class="navbar-logo">ArenaPortfolio</div>
  <ul class="navbar-links">
    <li><a href="#accueil">Accueil</a></li>
    <li><a href="#projets">Projets</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
  <div class="hamburger" id="hamburger">
    <div></div>
    <div></div>
    <div></div>
  </div>
</nav>

<script>
  const hamburger = document.getElementById('hamburger');
  const navLinks = document.querySelector('.navbar-links');

  hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
  });
</script>
