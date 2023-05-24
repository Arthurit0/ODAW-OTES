<?php

include("menu.html");

$codigo = $_GET['codigo'];
$nome = "";
$email = "";
$idade = "";

$link = mysqli_connect("localhost", "root", "arthur", "exercicio_odaw");

$query = "SELECT * FROM exercicio11 WHERE codigo='$codigo'";
$result = mysqli_query($link, $query);
if ($row = mysqli_fetch_row($result)) {
	$nome = $row[1];
	$email = $row[2];
	$idade = $row[3];
}

mysqli_close($link);

echo "
	<form action='alterar.php' method='post'>
	<b>Alterar elemento codigo $codigo:<b><br><br>
	<input type='hidden' name='codigo' value='$codigo'>
	Nome: <input type='text' name='nome' value='$nome'><br>
	Email: <input type='text' name='email' value='$email'><br>
	Idade: <input type='number' name='idade' value='$idade'><br>
	<input type='submit' name='adicionar' value='adicionar'>
	</form><hr>
";
