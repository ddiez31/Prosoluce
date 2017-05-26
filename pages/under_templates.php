<?php 
include ('header.php');
?>

<div id="d_cont">
    <h2>Modèles</h2>
    <div class="ui four column grid">
        <div class="row icones">
            <div class="column">
                <a href="templates/templates_create_change.php"><br><h3>Création ou modification d'un modèle</h3></a>
                <a href="templates/templates_delete.php"><br><h3>Suppression d'un modèle</h3></a>
                <a href="templates/templates_news.php"><br><h3>Information sur un modèle</h3></a>
                <a href="templates/templates_list.php"><br><h3>Liste de tous les modèles existants</h3></a>
                <a href="templates/templates_add_rec.php"><br><h3>Ajoute un enregistrement au sein d'un modèle "voix"</h3></a>
                <a href="templates/templates_download_rec.php"><br><h3>Télécharge un enregistrement présent dans un modèle "voix"</h3></a>
            </div>
        </div>
    </div>
</div>
<div class="ui basic buttons">
    <a href="../index.php" class="ui button">Accueil</a>
</div>
</div>
</div>


<?php
include ('footer.php');
?>