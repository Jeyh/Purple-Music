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
		//echo ' - ';
		//echo $data['Note'];
		
		
		$note = $data['Note'];
		//$Nouvellenote = imagecreatefromjpeg ($ImageChoisie);
		//imagecreate(($note*20), 26);?>
		<!--<div style="width:10px; height:26px; overflow:auto; background-color:red;"> </div>-->
		<div style="width: <?php echo ($note*10);?>px; height:26px; overflow:auto; background-image:url('./Img/Btn/etoiles.png'); margin:0 auto;"> </div>
		<?php 
		//print '<img src="./Img/Btn/etoiles.png"  alt= "note" width = "'.($note*20).'"px""; />';
		echo '<br>';
	}
	?>
	</div>
	
	
	<?php
		include "footer.php";
	?>