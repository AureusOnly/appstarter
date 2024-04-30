<script src="https://kit.fontawesome.com/b02458ab2c.js" crossorigin="anonymous"></script>

<div class="side-menu">
  <i class="fas fa-bars" id="toggleButton"></i>
  <div class="menu-container">
    <ul id="menuList" style="display: none;">
      <li>
        <a href="abonnes">
          <img src="abonnes-icon.png" alt="Abonnes">
          <span class="link-name">Abonnes</span>
        </a>
      </li>
      <li>
        <a href="livres">
          <img src="livres-icon.png" alt="Livres">
          <span class="link-name">Livres</span>
        </a>
      </li>
      <li>
        <a href="exemplaires">
          <img src="abonnes-icon.png" alt="Exemplaires">
          <span class="link-name">Exemplaires</span>
        </a>
      </li>
      <li>
        <a href="emprunts">
          <img src="abonnes-icon.png" alt="Emprunts">
          <span class="link-name">Emprunts</span>
        </a>
      </li>
      <li>
        <a href="demandes">
          <img src="abonnes-icon.png" alt="Demandes">
          <span class="link-name">Demandes</span>
        </a>
      </li>
      <li>
        <a href="retours">
          <img src="abonnes-icon.png" alt="Retours">
          <span class="link-name">Retours</span>
        </a>
      </li>
      <li>
        <a href="deconnexion">
          <img src="abonnes-icon.png" alt="Déconnexion">
          <span class="link-name">Déconnexion</span>
        </a>
      </li>
    </ul>
  </div>
</div>

<script>
  const toggleButton = document.getElementById('toggleButton');
  const menuList = document.getElementById('menuList');

  toggleButton.addEventListener('click', () => {
    menuList.style.display = menuList.style.display === 'none' ? 'block' : 'none';
  });
</script>
