<?php
include ('template/header.php');
?>


    <div id="d_cont">
        <h2>Envoyer une campagne</h2>
        <h3>Asynchrone</h3>
        <div class="ui four column grid">
            <div class="row icones">
                <div class="column">
                    <a href="compose_asynchrone_sms.php"><br><h3>Envoi de SMS sur des téléphones mobiles ou fixes</h3></a>
                    <a href="compose_asynchrone_voice.php"><br><h3>Envoi de campagnes d'appels téléphoniques</h3></a>
                    <a href="compose_asynchrone_mail.php"><br><h3>Envoi de courriers électroniques</h3></a>
                    <a href="compose_asynchrone_fax.php"><br><h3>Envoi de télécopies</h3></a>
                </div>
            </div>
        </div>
        <div class="ui basic buttons">
            <a href="../index.php" class="ui button">Accueil</a>
            <a href="under_compose.php" class="ui button">Retour</a>
        </div>
    </div>
    </div>


<?php
include ('template/footer.php');
?>