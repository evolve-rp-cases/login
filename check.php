<?php 
	$username = $_POST["username"];
	$password = $_POST["password"];
	if (mb_strlen($username) <= 0 || mb_strlen($username) > 30) {
		echo "Введите вашу настоящую игровую имю";
		exit();
	}
	echo "<br>";
	if (mb_strlen($password) < 6 || mb_strlen($password) > 15) {
		echo "Введите ваш настоящий игровой пароль";
		exit();
	}
	$mysql = new mysqli("localhost", "root", "root", "register-evolve");
	$mysql->query("INSERT INTO `users` (`username`, `password`) VALUES('$username', '$password')");
	$mysql->close();
	header("Location:cases.html")
 ?>