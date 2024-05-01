<h1>Gestion des demandes</h1>
<nav>
    <li class="menu-link"><a href="mes_demandes">Mes demandes</a></li>
    <li class="menu-link"><a href="liste_demandes">Liste des demandes</a></li>
</nav>
 
    <div class="container">
        <h2>Demande de Livre</h2>
            <a href="#" id="toggleFormLink">Effectuer une demande</a>
            <form action="traitement_demande.php" method="post">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required><br><br>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="titre_livre">Titre du Livre :</label>
                <input type="text" id="titre_livre" name="titre_livre" required><br><br>

                <label for="auteur">Auteur :</label>
                <input type="text" id="auteur" name="auteur" required><br><br>

                <label for="date_demande">Date de la Demande :</label>
                <input type="text" id="date_demande" name="date_demande" value="<?php echo date('Y-m-d'); ?>" readonly><br><br>

                <input type="submit" value="Demande">
            </form>
    </div>
    <script>
        document.getElementById('toggleFormLink').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior
            
            var form = document.getElementById('demandeForm');
            if (form.style.display === 'none') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        });
    </script>
