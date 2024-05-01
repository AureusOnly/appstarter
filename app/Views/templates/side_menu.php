<nav class="side-menu">
  <button id="toggleButton">Menu</button>
  <div class="menu-container">
    <ul id="menuList" style="display: none;">
      <li>
        <a href="abonnes">
          <span class="link-name">Abonnes</span>
        </a>
      </li>
      <li>
        <a href="livres">
          <span class="link-name">Livres</span>
        </a>
      </li>
      <li>
        <a href="exemplaires">
          <span class="link-name">Exemplaires</span>
        </a>
      </li>
      <li>
        <a href="emprunts">
          <span class="link-name">Emprunts</span>
        </a>
      </li>
      <li>
        <a href="demandes">
          <span class="link-name">Demandes</span>
        </a>
      </li>
      <li>
        <a href="retours">
          <span class="link-name">Retours</span>
        </a>
      </li>
      <li>
        <a href="deconnexion">
          <span class="link-name">Déconnexion</span>
        </a>
      </li>
    </ul>
  </div>
</nav>

<script>
  const toggleButton = document.getElementById('toggleButton');
  const menuList = document.getElementById('menuList');

  toggleButton.addEventListener('click', () => {
    menuList.style.display = menuList.style.display === 'none' ? 'block' : 'none';
  });
</script>
