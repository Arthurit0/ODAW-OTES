<?php
include("menu.html");
?>

<form action="inserir.php" method="post">
	<b>Inserir novo cadastro:<b><br><br>
			Nome: <input type="text" name="nome"><br>
			Email: <input type="text" name="email"><br>
			Idade: <input type="number" name="idade"><br>
			<input type="submit" name="adicionar" value="adicionar">
</form>
<hr>