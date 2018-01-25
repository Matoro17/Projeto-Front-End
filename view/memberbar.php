<?php
	echo $_SESSION['name'];
	if ($_SESSION['admin']) {
		echo "<a href='userRegister.php'>Cadastrar Usuario</a>";
		echo "<a href='projectRegister.php'>Cadastrar Projeto</a>";
	}
?>
