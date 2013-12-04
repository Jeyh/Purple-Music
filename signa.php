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
	while ($data = $ressigna-> fetch_assoc() )
	{	
		$SignTest = $data['Signature Article'];
		if(!isset($Sign))
		{
			echo '<br>';
			$Sign = $data['Signature Article'];  ?>
			<h4> <?php echo $data['Signature Article'];?> </h4> <?php
			echo '<br>';
		}
		else if ($Sign != $SignTest)
		{
			echo '<br>';
			$Sign = $data['Signature Article'];  ?>
			<h4> <?php echo $data['Signature Article'];?> </h4> <?php
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
