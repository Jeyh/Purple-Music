<?php
	include "Header.php";
?>
</head>
<body>	
<br><br>
	<h3><b>Genres musicaux</b></h3>
	
	<?php
	include 'BD.php';
	?>
	
	
	<div id="contenuliste">
	<?php
		
		?><h4><?php echo "Electronique" ?></h4><?php
		while ($data = $reselec-> fetch_assoc() )
		{	
			
			echo '<a href="'.$data['NomPagePhp'].'">';
			echo $data['Nom'];
			echo '</a>';
			echo '<br>';
			
			
		}
	
		
		?><h4><?php echo "Heavy metal" ?></h4><?php
		while ($data = $reshm-> fetch_assoc() )
		{	
			
			echo '<a href="'.$data['NomPagePhp'].'">';
			echo $data['Nom'];
			echo '</a>';
			echo '<br>';
			
			
		}
	
	
		?><h4><?php echo "Pop" ?></h4><?php
		while ($data = $respop-> fetch_assoc() )
		{	
			
			echo '<a href="'.$data['NomPagePhp'].'">';
			echo $data['Nom'];
			echo '</a>';
			echo '<br>';
			
			
		}
	
		
		?><h4><?php echo "Punk" ?></h4><?php
		while ($data = $respunk-> fetch_assoc() )
		{	
			
			echo '<a href="'.$data['NomPagePhp'].'">';
			echo $data['Nom'];
			echo '</a>';
			echo '<br>';
			
			
		}
	
		
		?><h4><?php echo "Metalcore" ?></h4><?php
		while ($data = $resmetalcore-> fetch_assoc() )
		{	
			
			echo '<a href="'.$data['NomPagePhp'].'">';
			echo $data['Nom'];
			echo '</a>';
			echo '<br>';
			
			
		}
	
		
		?><h4><?php echo "Post-Hardcore" ?></h4><?php
		while ($data = $resposthardcore-> fetch_assoc() )
		{	
			
			echo '<a href="'.$data['NomPagePhp'].'">';
			echo $data['Nom'];
			echo '</a>';
			echo '<br>';
			
			
		}
	
		?><h4><?php echo "Pop-Punk" ?></h4><?php
		while ($data = $respoppunk-> fetch_assoc() )
		{	
			
			echo '<a href="'.$data['NomPagePhp'].'">';
			echo $data['Nom'];
			echo '</a>';
			echo '<br>';
			
			
		}
		
		?><h4><?php echo "Grunge" ?></h4><?php
		while ($data = $resgrunge-> fetch_assoc() )
		{	
			
			echo '<a href="'.$data['NomPagePhp'].'">';
			echo $data['Nom'];
			echo '</a>';
			echo '<br>';
			
			
		}
		
		?><h4><?php echo "HardRock" ?></h4><?php
		while ($data = $reshardrock-> fetch_assoc() )
		{	
			
			echo '<a href="'.$data['NomPagePhp'].'">';
			echo $data['Nom'];
			echo '</a>';
			echo '<br>';
			
			
		}
		
		?><h4><?php echo "Rock" ?></h4><?php
		while ($data = $resrock-> fetch_assoc() )
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