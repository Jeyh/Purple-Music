
<?php
	include 'BD.php';

?>
<div id="piedpage"> 
<?php
	$randomnumber = rand (0,23);
	$respiedpage = $db->query('SELECT * FROM phrasesalacon where ID = '.$randomnumber.' ');
	
	$phrase = $respiedpage-> fetch_assoc() ;
	echo $phrase['texte'];




	?>
  </div>

	</body>
</html>