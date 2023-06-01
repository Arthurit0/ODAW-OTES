<?php

include("menu.html");

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$birthday = $_POST['birthday'];

$link = mysqli_connect("localhost", "root", "arthur", "exercicio_odaw");

$query = "INSERT INTO exercicio11 (nome, email, idade, birthday) VALUES ('$nome', '$email', '$idade', '$birthday')";
echo "<b>INSERIR:</b> $query<br><hr>";
mysqli_query($link, $query);
mysqli_close($link);
