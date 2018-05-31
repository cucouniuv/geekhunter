<?php

	function raizQuadrada($valor)
	{
		$x = $valor;
		$y = 1;
		$z = 1;

		while (($x > $y) && ($z < 10)) {
			$x = ($x + $y)/2;

			$y = $valor/$x;

			echo 'x:'.$x.'<br/>';
			echo 'y:'.$y.'<br/>';

			++$z;
		}

		$x = number_format($x, 3);

		return $x;
	}

	echo '<h3>Cálculo de raiz quadrada com retorno de 3 casas decimais</h3>';

	$ret = raizQuadrada(2);
	echo '<br/>';
	echo 'Resultado: '.$ret.'<br/>';
	echo '<br/>';

	$ret = raizQuadrada(13);
	echo '<br/>';
	echo 'Resultado: '.$ret.'<br/>';
?>