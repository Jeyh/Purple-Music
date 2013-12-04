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
		
		$AnneeTest = $data['AnneeCreation'];
		if(!isset($AnneeCreation))
		{
			echo '<br>';
			$AnneeCreation = $data['AnneeCreation'];  ?>
			<h4> <?php echo $data['AnneeCreation'];?> </h4> <?php
			echo '<br>';
		}
		
		else if ($AnneeCreation != $AnneeTest)
		{
			echo '<br>';
			$AnneeCreation = $data['AnneeCreation'];  ?>
			<h4> <?php echo $data['AnneeCreation'];?> </h4> <?php
			echo '<br>';
		}
		
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
