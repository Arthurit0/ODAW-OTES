<?php

include("menu.html");

$codigo = $_GET['codigo'];

$link = mysqli_connect("localhost", "root", "arthur", "exercicio_odaw");

$query = "DELETE FROM exercicio11 WHERE codigo='$codigo'";
echo "<b>DELETAR:</b> $query<br><hr>";
mysqli_query($link, $query);
mysqli_close($link);
