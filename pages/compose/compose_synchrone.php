<?php
include ('../header.php');
?>

    <div id="d_cont">
    <div class="ui segment">
        <h2 class="ui left floated header">Envoyer une campagne</h2>
        <h3 class="ui orange right floated header">Synchrone</h3>
        <div class="ui clearing divider"></div>
        <div class="ui four column grid">
            <div class="row icones">
                <div class="ui horizontal list">
                    <div class="item">
                        <a href="compose_synchrone_sms.php"><i class="mail icon big"></i><h3>Envoi de SMS sur des <br>téléphones mobiles ou fixes</h3></a>
                    </div>
                    <div class="item">
                        <a href="compose_synchrone_voice.php"><i class="call icon big"></i><h3>Envoi de campagnes <br>d'appels téléphoniques</h3></a>
                    </div>
                </div>
            </div>
            <div class="row icones">
                <div class="ui horizontal list">
                    <div class="item">
                        <a href="compose_synchrone_mail.php"><i class="at icon big"></i><h3>Envoi de courriers électroniques</h3></a>
                    </div>
                    <div class="item">
                        <a href="compose_synchrone_fax.php"><i class="fax icon big"></i><h3>Envoi de télécopies</h3></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui basic buttons">
            <a href="../../index.php" class="ui button">Accueil</a>
            <a href="../under_compose.php" class="ui button">Retour</a>
        </div>
    </div>
    </div>


<?php
include ('../footer.php');
?>