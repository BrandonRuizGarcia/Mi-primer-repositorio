<!DOCTYPE html>
<html lang="es">
<style>
table{
	border-collapse: collapse;
	background: white;
}
th,td{
	border: 1px solid black;
	padding: 8px;
	text-align: center;
}
</style>
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
		echo "Primer numero:";
		echo "<input type='number' name='num1[]'>"." ";

		echo "Segundo numero: ";
		echo "<input type='number' name='num2[]'>"." ";
		echo "<br><br>";
	}
	?>
	<button type="submit" name="guardar" value="guardar">Guardar y calcular</button>
	<?php
	if(isset($_POST['guardar'])){
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];

		$suma=array();
		$resta=array();
		$multiplicacion=array();
		$divicion=array();


		for($i=0;$i<3;$i++){
			$suma[$i]=$num1[$i]+$num2[$i];
			$resta[$i]=$num1[$i]-$num2[$i];
			$multiplicacion[$i]=$num1[$i]*$num2[$i];
			$divicion[$i]=$num1[$i]/$num2[$i];
		}		


		echo "<table>";
		echo "<tr>	
			<th>numero 1</th>
			<th>numero 2</th>
			<th>suma</th>
			<th>resta</th>
			<th>divicion</th>
			</tr>";


		for($i=0;$i<3;$i++){
			echo "<tr>";
			echo "<td>".$num1[$i]."</td>";
			echo "<td aling='center'>".$suma[$i]."</td>";
			echo "<td aling='center'>".$resta[$i]."</td>";
			echo "<td aling='center'>".$multiplicacion[$i]."</td>";
			echo "<td aling='center'>"."$".number_format($divicion[$i],2)."</td>";
		}

	}

	?>
</body>
</html>