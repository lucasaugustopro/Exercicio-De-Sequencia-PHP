<html>
	<head>
	
	</head>
	<body>
		<h1> Reajuste Salarial </h1>
<?php
	$salario = $_POST["salario"];

	$resultado = $salario + (salario * 0.1);
	
	echo "<p> O salario reajustado � $resultado</p>";	
	
?>
	</body>
</html>