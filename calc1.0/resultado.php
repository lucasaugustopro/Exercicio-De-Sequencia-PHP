<HTML>
	<HEAD>
	
	</HEAD>
	<BODY>
		<H1> CALCULADORA </H1>
		<?php
			// entrada de dados
			$num1 = $_POST["num1"];
			$num2 = $_POST ["num2"];
			
			/* processamento de dados */
			$soma = $num1 + $num2;
			
			// saída de dados
			echo "<p> A soma dos valores é $soma .</p>";
				
		?>
	</BODY>
</HTML>