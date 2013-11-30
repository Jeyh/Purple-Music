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
	
	while
	
		while ($data = $resgenres-> fetch_assoc() )
		{	
			echo '<a href="'.$data['NomPagePhp'].'">';
			echo $data['Nom'];
			echo '</a>';
			echo '<br>';
			echo $data[''];
			
		}
	
	?>
	</div>
	
	
<?php
	include "footer.php";
?>