<?php
	

	$db = new mysqli("localhost", "admin", "admin", "purpulemusic");
	$result = $db->query('SELECT * FROM groupes ORDER BY `Nom`');
	$resnote = $db->query('SELECT * FROM groupes  ORDER BY `Note` DESC');
	
	if ($result === false)
		return;
	
	
	
?>