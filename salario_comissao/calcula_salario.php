<html>
	<head>
	
	</head>
	<body>
		<h1>  SALARIO - COMISS�O  </h1>
		<?php
			$nome = $_POST["nome"];
			$salario = $_POST["salario"];
			$total_vendas = $_POST["total_vendas"];
			
			
			$salario_final = $salario + ($total_vendas * 0.15);
			
			echo "O salario final � $salario_final </p>";
		?>
	</body>

</html>