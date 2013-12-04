<?php
	include "Header.php";
?>

<body>	
	<h3><b>Année de formation</b></h3>
	
	<?php
	include 'BD.php';
	?>
	
	
	<div id="contenuliste">
	<?php
	while ($data = $rescrea-> fetch_assoc() )
	{	
		echo $data['AnneeCreation'];
		echo ' - ';
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
