<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Vector de 4 valores</title>
</head>
<body>
	<h2>Registro de tres productos</h2>
	<!--Formulario de captura-->
	<form method="POST" action="">
	<?php
	//ciclo para mostrar tres renglones de captura
	for($i=0;$i<3;$i++){
		echo "producto:";
		echo "<input type='text' name='productos[]'>"." ";

		echo "precio:";
		echo "<input type='number' name='precio[]'>"." ";

		echo "cantidades: ";
		echo "<input type='number' name='cantidades[]'>"." ";
		echo "<br><br>";
	}
	?>
	<!--boton para guardar y calcular-->
	<button type="submit" name="guardar" value="guardar">Guardar y calcular</button>
	<?php
	//verificar si se preciono el boton Guardar
	if(isset($_POST['guardar'])){
		//Guardar los datos en tres arreglos
		$productos=$_POST['productos'];
		$precios=$_POST['precio'];
		$cantidades =$_POST['cantidades'];
		//Declarar los arreglos de resultados
		$subtotales=array();
		$iva=array();
		$totales=array();
		
		//ciclo para realizar los calculos
		for($i=0;$i<3;$i++){

			//calcular subtotal
			$subtotales[$i]=$precios[$i]*$cantidades[$i];

			//calcular IVA de 16%
			$iva[$i]=$subtotales[$i]+0.16;

			//Calcular total
			$totales[$i]=$subtotales[$i]+$iva[$i];
		}

		//imprimir el arreglo de productos
		echo "<h3>Arreglo de productos</h3>";
		for($i=0;$i<3;$i++){
			echo $productos[$i]."<br>";
		}

		//imprimir el arreglo de precios
		echo "<h3>Arreglo de precios</h3>";
		for ($i=0;$i<3;$i++){
			echo $precios[$i]."<br>";
		}

		//imprimir el arreglo de cantidades
		echo "<h3>Arreglo de cantidades</h3>";
		for($i=0;$i<3;$i++){
			echo ($cantidades[$i])."<br>";
		}

		//imprimir el arreglo de subtotales
		echo "<h3>Arreglo de subtotales</h3>";
		for ($i=0;$i<3;$i++){
			echo "$".number_format($subtotales[$i],2)."<br>";
		}
		//imprimir el arreglo de IVA
		echo "<h3>Arreglo de IVA</h3>";
		for($i=0;$i<3;$i++){
			echo "$".number_format($iva[$i],2)."<br>";
		}

		//imprimir arreglo de totales
		echo "<h3>Arreglo de totales</h3>";
		for($i=0;$i<3;$i++){
			echo "$".number_format($totales[$i],2)."<br>";
		}

	}

	?>
</body>
</html>