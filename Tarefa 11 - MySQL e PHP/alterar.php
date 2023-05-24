<?php

include("menu.html");

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

$link = mysqli_connect("localhost", "root", "arthur", "exercicio_odaw");

$query = "UPDATE exercicio11 SET nome='$nome', email='$email', idade='$idade' WHERE codigo='$codigo'";
echo "UPDATE: $query<br><hr>";
mysqli_query($link, $query);
mysqli_close($link);
