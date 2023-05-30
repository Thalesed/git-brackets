<?php
	if($_GET['break'] == 1){
		echo $_GET['break'];
		session_destroy();
		setcookie("login");
		header("Location: /index.html");
	}
	session_start();
	$name = htmlspecialchars($_POST["login"]);
	if($name != NULL){
		setcookie("login", $name);
	}
	$_SESSION['contador'] += 2;
	$now = date("d/m/Y", time());
	echo "<p>hoje é $now<p>";
	if($_COOKIE['login'] != NULL){
		echo "nome = " .$_COOKIE['login'] . "<p>";
	}elseif($name != NULL){
		echo "<p> nome =  $name <p>";
	}
	echo "contador: " . $_SESSION['contador'];
?>
<a href="/teste.php?break=1">LogOut</a>
