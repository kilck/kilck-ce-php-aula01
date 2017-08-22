<?php
//variáveis
$a = 10;
$b = 20;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP - Atividade 01</title>
	 <link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<h3>Matheus Afonso</h3>
	<h1>PHP - Atividade 01</h1>
	<p>Considerando que A seja igual a 10 e B seja igual a 20, eis os seguintes cálculos:</p>
	<table>
		<tr>
			<th>Operação</th>
			<th>Resultado</th>
		</tr>
		<tr>
			<td>A + B</td>
			<td><?php echo $a + $b ?></td>
		</tr>
		<tr>
			<td>A - B</td>
			<td><?php echo $a - $b ?></td>
		</tr>
		<tr>
			<td>A x B</td>
			<td><?php echo $a * $b ?></td>
		</tr>
		<tr>
			<td>A / B</td>
			<td><?php echo $a / $b ?></td>
		</tr>
		<tr>
			<td>B<sup>A</sup></td>
			<td>
				<?php 
					$result = pow($b,$a); 
					echo  number_format("$result",2,",",".");
				?>				
			</td>
		</tr>
	</table>
</body>
</html>