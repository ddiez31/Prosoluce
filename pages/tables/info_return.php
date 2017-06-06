<table class="ui fixed line celled table">
    <thead>
        <tr>
            <th>Paramètres</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>number</td>
            <td>Numéro au format international (exemple : 33610203040)</td>
        </tr>
        <tr>
            <td>status_code</td>
            <td>Code correspondant à l’état général de la demande (voir annexe)</td>
        </tr>
        <tr>
            <td>status_msg</td>
            <td>État de la demande</td>
        </tr>
        <tr>
            <td>error_code</td>
            <td>Code correspondant à l’état du numéro (voir annexe)</td>
        </tr>
        <tr>
            <td>error_permanent</td>
            <td>false = erreur temporaire / true = erreur permanente</td>
        </tr>
        <tr>
            <td>error_msg</td>
            <td>État du numéro</td>
        </tr>
        <tr>
            <td>imsi</td>
            <td>Numéro IMSI (numéro unique d’identification de l’usager)</td>
        </tr>
        <tr>
            <td>net_mcc</td>
            <td>Code du pays (exemple : 208 pour la France)</td>
        </tr>
        <tr>
            <td>test_mnc</td>
            <td>Code du réseau (exemple : 15 pour Free Mobile)</td>
        </tr>
        <tr>
            <td>ported</td>
            <td>true = numéro porté / false = numéro non porté</td>
        </tr>
        <tr>
            <td>net_orig</td>
            <td>Opérateur d’origine (qui a attribué le numéro de téléphone)</td>
        </tr>
        <tr>
            <td>net_orig_prefix</td>
            <td>Préfixe de l’opérateur d’origine</td>
        </tr>
        <tr>
            <td>net_orig_country</td>
            <td>Indicatif téléphonique du pays de l’opérateur d’origine (ex : France = 33)</td>
        </tr>
        <tr>
            <td>net_port</td>
            <td>Opérateur chez lequel le numéro est porté (facultatif)</td>
        </tr>
        <tr>
            <td>net_port_perfix</td>
            <td>Préfixe de l’opérateur ayant porté le numéro</td>
        </tr>
        <tr>
            <td>net_port_country</td>
            <td>Indicatif téléphonique du pays de l’opérateur ayant porté le numéro</td>
        </tr>
    </tbody>
</table>