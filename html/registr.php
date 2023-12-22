<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/registr.css">
</head>
<body>
	<div id="conteiner">
		<div id="nazv">Регистрация</div>
		<form action="../php/Регистрация.php" method="post" id="reg">
			<div id="name"><input  type="text" name="name" placeholder="Ваше имя" id="name1"></div>
			<div id="email"><input  type="email" name="email" placeholder="Ваш e-mail" id="email1"></div>
			<div id="pass"><input  type="password" name="pass" placeholder="Придумайте пароль" id="pass1"></div>
			<button id="button1" type="submit" id="button1">Зарегистрироваться</button>
		</form>
		<a href="index.php" id="button5">
			<input id="button3" type="submit" value="Отмена">
		</a>
		<a href="a_exit.php" id="button6">
			<input id="button2" type="submit" value="Войти">
		</a>
	</div>
</body>
</html>