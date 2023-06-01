<?php
include("menu.html");
?>

<form action="inserir.php" method="post">
	<b>Inserir novo cadastro:<b><br><br>
			Nome: <input type="text" name="nome"><br>
			Email: <input type="email" name="email"><br>
			Idade: <input type="number" name="idade"><br>
			Data de Nascimento:<input type="date" name="birthday"><br>
			<input type='submit' name='Adicionar' value='Adicionar'>
</form>
<hr>