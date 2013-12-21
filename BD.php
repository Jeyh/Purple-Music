<?php
	

	$db = new mysqli("localhost", "root", "", "purpulemusic");
	$result = $db->query("SELECT * FROM groupes WHERE `termine` = '1' ORDER BY `Nom`  ");
	$resnote = $db->query("SELECT * FROM groupes WHERE `termine` = '1' ORDER BY `Note` DESC, `Nom` ");
	$resnatio = $db->query("SELECT * FROM groupes WHERE `termine` = '1' ORDER BY `Nationnalite`, `Nom`");
	$ressigna = $db->query("SELECT * FROM groupes WHERE `termine` = '1' ORDER BY `Signature Article`, `Nom` ");
	$rescrea = $db->query("SELECT * FROM groupes WHERE `termine` = '1' ORDER BY `AnneeCreation` DESC, `Nom` ");
	
	$resnbgenre = $db -> query("SELECT COUNT * FROM genres");
	
	
	//C'est carrément sale, et pas bien, mais on a pas réussi a faire mieux pour les genres musicaux.
	$reselec = $db->query("SELECT * FROM genres ge LEFT JOIN gg ON ( ge.ID = gg.idge ) LEFT JOIN groupes gr ON ( gg.idgp = gr.ID ) WHERE ge.NomGenre = 'Electronique' AND gr.termine='1' ORDER BY gr.Nom ");
	$reshm = $db->query("SELECT * FROM genres ge LEFT JOIN gg ON ( ge.ID = gg.idge ) LEFT JOIN groupes gr ON ( gg.idgp = gr.ID ) WHERE ge.NomGenre = 'Heavy Metal' AND gr.termine='1' ORDER BY gr.Nom");
	$respop = $db->query("SELECT * FROM genres ge LEFT JOIN gg ON ( ge.ID = gg.idge ) LEFT JOIN groupes gr ON ( gg.idgp = gr.ID ) WHERE ge.NomGenre = 'Pop' AND gr.termine='1' ORDER BY gr.Nom");
	$respunk = $db->query("SELECT * FROM genres ge LEFT JOIN gg ON ( ge.ID = gg.idge ) LEFT JOIN groupes gr ON ( gg.idgp = gr.ID ) WHERE ge.NomGenre = 'Punk' AND gr.termine='1' ORDER BY gr.Nom");
	$resmetalcore = $db->query("SELECT * FROM genres ge LEFT JOIN gg ON ( ge.ID = gg.idge ) LEFT JOIN groupes gr ON ( gg.idgp = gr.ID ) WHERE ge.NomGenre = 'Metalcore' AND gr.termine='1' ORDER BY gr.Nom");
	$resposthardcore = $db->query("SELECT * FROM genres ge LEFT JOIN gg ON ( ge.ID = gg.idge ) LEFT JOIN groupes gr ON ( gg.idgp = gr.ID ) WHERE ge.NomGenre = 'Post-Hardcore' AND gr.termine='1' ORDER BY gr.Nom ");
	$respoppunk = $db->query("SELECT * FROM genres ge LEFT JOIN gg ON ( ge.ID = gg.idge ) LEFT JOIN groupes gr ON ( gg.idgp = gr.ID ) WHERE ge.NomGenre = 'Pop-Punk' AND gr.termine='1' ORDER BY gr.Nom");
	$resposthardcore = $db->query("SELECT * FROM genres ge LEFT JOIN gg ON ( ge.ID = gg.idge ) LEFT JOIN groupes gr ON ( gg.idgp = gr.ID ) WHERE ge.NomGenre = 'Post-Hardcore' AND gr.termine='1' ORDER BY gr.Nom");
	$resgrunge = $db->query("SELECT * FROM genres ge LEFT JOIN gg ON ( ge.ID = gg.idge ) LEFT JOIN groupes gr ON ( gg.idgp = gr.ID ) WHERE ge.NomGenre = 'Grunge' AND gr.termine='1' ORDER BY gr.Nom");
	$reshardrock = $db->query("SELECT * FROM genres ge LEFT JOIN gg ON ( ge.ID = gg.idge ) LEFT JOIN groupes gr ON ( gg.idgp = gr.ID ) WHERE ge.NomGenre = 'HardRock' AND gr.termine='1' ORDER BY gr.Nom");
	$resrock = $db->query("SELECT * FROM genres ge LEFT JOIN gg ON ( ge.ID = gg.idge ) LEFT JOIN groupes gr ON ( gg.idgp = gr.ID ) WHERE ge.NomGenre = 'Rock' AND gr.termine='1' ORDER BY gr.Nom");
	
	
	
	//for ($i = 1; $i < $resnbgenre; $i++) {
	
	//	echo "a que coucou";
	//	$resgenre = $db->query("select * From genres ge left join gg on(ge.ID = gg.idge) left join groupes gr on(gg.idgp = gr.ID) where ge.ID = '1'");
	
	//}
	
	if ($result === false)
		return;
	
	
	
?>