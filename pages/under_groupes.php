<?php 
include ('header.php');
?>
<div id="d_cont">
	<h2>Groupes d'envoi</h2>
	<div class="ui four column grid">
		<div class="row icones">
			<div class="column">
				<a href="groupes_search_user.php"><br><h3>Recherche de membres</h3></a>
				<a href="groupes_add_user.php"><br><h3>Ajout d'un membre</h3></a>
				<a href="groupes_change_user.php"><br><h3>Modification d'un membre</h3></a>
				<a href="groupes_delete_user.php"><br><h3>Suppression d'un membre</h3></a>
				<a href="groupes_list_groups.php"><br><h3>Liste des groupes existants</h3></a>
				<a href="groupes_info_groups.php"><br><h3>Informations sur un groupe</h3></a>
				<a href="groupes_create_groups.php"><br><h3>Création d'un groupe</h3></a>
				<a href="groupes_change_groups.php"><br><h3>Modification d'un groupe</h3></a>
				<a href="groupes_delete_groups.php"><br><h3>Suppression d'un groupe</h3></a>
				<a href="groupes_delete_contains_groups.php"><br><h3>Supprime le contenu d'un groupe d'envoi</h3></a>
				<a href="groupes_import_contacts_XML.php"><br><h3>Import de contacts depuis un fichier XML</h3></a>
				<a href="groupes_add_fields_groups.php"><br><h3>Ajouter des champs dans un groupe</h3></a>
				<a href="groupes_delete_fields_groups.php"><br><h3>Supprimer des champs dans un groupe</h3></a>
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