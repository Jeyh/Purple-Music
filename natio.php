<?php
	include "Header.php";
?>

<body>	
	<h3><b>Nationnalité</b></h3>
	
	<?php
	include 'BD.php';
	?>
	
	<div id="contenuliste">
	<?php
	while ($data = $resnatio-> fetch_assoc() )
	{	
		
		$imgTest = "./Img/Btn/".$data['Nationnalite'].".png";
		if(!isset($image))
		{
			echo '<br>';
			$image = "./Img/Btn/".$data['Nationnalite'].".png";
			print '<img src="'.$image.'" alt= "drapeau" />';
			echo ' - ';
			echo $data['Nationnalite'];
			echo '<br>';
			echo '<br>';
		}
		else if ($image != $imgTest)
		{
			echo '<br>';
			$image = "./Img/Btn/".$data['Nationnalite'].".png";
			print '<img src="'.$image.'" alt= "drapeau" />';
			echo ' - ';
			echo $data['Nationnalite'];
			echo '<br>';
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