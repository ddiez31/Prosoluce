<?xml version="1.0"?>
<ecampaign>
	<login>
		<user>UTILISATEUR</user>
		<password>MOT_DE_PASSE</password>
		<md5>MD5</md5>
	</login>
	<manageGroup>
		<addGroup>
			<name>NOM_GROUPE</name>
			<locked_structure>STRUCTURE_VERROUILLEE_SUR_INTERFACE_BOOL</locked_structure>
			<locked_content>CONTENU_VERROUILLEE_SUR_INTERFACE_BOOL</locked_content>
			<tags>
				<item type="TYPE_CHAMP">NOM_CHAMP</item>
				<item type="TYPE_CHAMP" unique="ANTI_DOUBLON_BOOL">NOM_CHAMP</item>
				...
			</tags>
		</addGroup>
	</manageGroup>
</ecampaign>
