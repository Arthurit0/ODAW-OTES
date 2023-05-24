<?php

include("menu.html");

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

$link = mysqli_connect("localhost", "root", "arthur", "exercicio_odaw");

$query = "INSERT INTO exercicio11 (nome, email, idade) VALUES ('$nome', '$email', '$idade')";
echo "INSERT: $query<br><hr>";
mysqli_query($link, $query);
mysqli_close($link);
