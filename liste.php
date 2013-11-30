<?php
	include "Header.php";
?>

<body>	
	<h3><b>Liste des groupes</b></h3>
	
	<?php
	include 'BD.php';
	?>
	
	
	<div id="contenuliste">
	<?php
	while ($data = $result-> fetch_assoc() )
	{	
		echo '<a href="'.$data['NomPagePhp'].'">';
		echo $data['Nom'];
		echo '</a>';
		echo '<br>';
	}
	
	?>
	</div>
	
<?php
	include "footer.php";
?>
