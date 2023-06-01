<?php

include("menu.html");

$codigo = $_GET['codigo'];
$nome = "";
$email = "";
$idade = "";
$birthday = "";

$link = mysqli_connect("localhost", "root", "arthur", "exercicio_odaw");

$query = "SELECT * FROM exercicio11 WHERE codigo='$codigo'";
$result = mysqli_query($link, $query);
if ($row = mysqli_fetch_row($result)) {
	$nome = $row[1];
	$email = $row[2];
	$idade = $row[3];
	$birthday = $row[4];
}

mysqli_close($link);

echo "
	<form action='alterar.php' method='post'>
	<b>Alterar elemento codigo $codigo:<b><br><br>
	<input type='hidden' name='codigo' value='$codigo'>
	Nome: <input type='text' name='nome' value='$nome'><br>
	Email: <input type='email' name='email' value='$email'><br>
	Idade: <input type='number' name='idade' value='$idade'><br>
	Data de Nascimento: <input type='date' name='birthday' value='$birthday' /><br>
	<input type='submit' name='Alterar' value='Alterar'>
	</form><hr>
";
