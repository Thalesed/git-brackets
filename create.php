<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<meta charset="utf-8"/>
</head>
<body>
	<form action="/insert.php" method="POST">
		<p>
			login : <input type="text" name="login" id="login">
		</p><p>
			Senha: <input type="password" name="senha" id="senha">
		</p>
		<input type="submit" id="enter" style="display:none;">

		<script>
			function show(){
				var name = document.getElementById("login");
				var senha = document.getElementById("senha");
				var enter = document.getElementById("enter");
				if(name.value.length < 5 || senha.value.length < 6){
					enter.style.display = "none";
				}else{
					enter.style.display = "block";
				}
			}
			setInterval(show, 100);
		</script>
	</form>
</body>
</html>
