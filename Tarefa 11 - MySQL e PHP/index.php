<?php

include("menu.html");

$link = mysqli_connect("localhost", "root", "arthur", "exercicio_odaw");

$query = "SELECT * FROM exercicio11 ORDER BY nome";
$result = mysqli_query($link, $query);

if (mysqli_num_rows($result) != 0) {
	echo "SELECT: $query<br>";
	echo "<table border=\"1\">";
	echo "<tr><td><b>Código</b></td>";
	echo "<td><b>Nome</b></td>";
	echo "<td><b>Email</b></td>";
	echo "<td><b>Idade</b></td>";
	echo "<td><b>Data de Nascimento</b></td>";
	echo "<td><b>Opção</b></td>";
	echo "<td><b>Opção</b></td></tr>";
	while ($row = mysqli_fetch_row($result)) {
		echo "<tr><td>" . $row[0] . "</td>";
		echo "<td>" . $row[1] . "</td>";
		echo "<td>" . $row[2] . "</td>";
		echo "<td>" . $row[3] . "</td>";
		echo "<td>" . $row[4] . "</td>";
		echo "<td><a href=\"deletar.php?codigo=" . $row[0] . "\">deletar</a>";
		echo "<td><a href=\"form_alterar.php?codigo=" . $row[0] . "\">alterar</a></tr>";
	}
	echo "</table><hr>";
} else {
	echo "Nenhuma linha registrada na tabela";
}

mysqli_close($link);
