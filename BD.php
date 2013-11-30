<?php
	

	$db = new mysqli("localhost", "root", "", "purpulemusic");
	$result = $db->query("SELECT * FROM groupes WHERE `termine` = '1' ORDER BY `Nom`  ");
	$resnote = $db->query("SELECT * FROM groupes WHERE `termine` = '1' ORDER BY `Note` DESC");
	$resnatio = $db->query("SELECT * FROM groupes WHERE `termine` = '1' ORDER BY `Nationnalite`");
	$ressigna = $db->query("SELECT * FROM groupes WHERE `termine` = '1' ORDER BY `Signature Article`");
	$resgenre = $db->query("SELECT * FROM `groupes` NATURAL JOIN `genres`WHERE `ID` = `idgp` ");
	$resgenredata = $db->query("SELECT * FROM `genres`");
	
	if ($result === false)
		return;
	
	
	
?>