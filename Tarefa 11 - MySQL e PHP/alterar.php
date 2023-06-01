<?php

include("menu.html");

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$birthday = $_POST['birthday'];

$link = mysqli_connect("localhost", "root", "arthur", "exercicio_odaw");

$query = "UPDATE exercicio11 SET nome='$nome', email='$email', idade='$idade', birthday='$birthday' WHERE codigo='$codigo'";
echo "<b>ALTERAR:</b> $query<br><hr>";
mysqli_query($link, $query);
mysqli_close($link);
