<?php
	

	$db = new mysqli("localhost", "root", "", "purpulemusic");
	$result = $db->query("SELECT * FROM groupes WHERE `termine` = '1' ORDER BY `Nom`  ");
	$resnote = $db->query("SELECT * FROM groupes WHERE `termine` = '1' ORDER BY `Note` DESC, `Nom` ");
	$resnatio = $db->query("SELECT * FROM groupes WHERE `termine` = '1' ORDER BY `Nationnalite`, `Nom`");
	$ressigna = $db->query("SELECT * FROM groupes WHERE `termine` = '1' ORDER BY `Signature Article`, `Nom` ");
	$rescrea = $db->query("SELECT * FROM groupes WHERE `termine` = '1' ORDER BY `AnneeCreation` DESC, `Nom` ");
	
	$resnbgenre = $db -> query("SELECT COUNT * FROM genres");
	
	
	
	
	//for ($i = 1; $i < $resnbgenre; $i++) {
	
	//	echo "a que coucou";
	//	$resgenre = $db->query("select * From genres ge left join gg on(ge.ID = gg.idge) left join groupes gr on(gg.idgp = gr.ID) where ge.ID = '1'");
	
	//}
	
	if ($result === false)
		return;
	
	
	
?>