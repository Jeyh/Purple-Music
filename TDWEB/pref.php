<?php
	include "Header.php";
?>

<body>	
<br><br>
	<h3><b>Nos préférences</b></h3>
	
	<?php
	include 'BD.php';
	?>
	
	
	<div id="contenupref">
	<?php
	while ($data = $resnote-> fetch_assoc() )
	{	
		echo '<a href="'.$data['NomPagePhp'].'">';
		echo $data['Nom'];
		echo '</a>';
		echo ' - ';
		echo $data['Note'];
		echo '<br>';
	}
	?>
	</div>
	
	
	<?php
		include "footer.php";
	?>