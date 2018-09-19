<?php
	include 'connect.php';
?>
<html>
<head>
</head>
<body>
<form method="post" action="Registration.php">
<input type="text" name="nick">
<input type="text" name="pass">
<input type="submit" name="submit">
</form>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST["submit"])){
			$nick = $_POST['nick'];
			$pass = $_POST['pass'];
			$query = "INSERT INTO  users(Nickname, Password) VALUES('$nick', '".md5($pass)."')";
			$result = mysqli_query($conn,$query);
			if($result)
				echo 'Your account was succesfully created!';
			else
				echo 'Something wrong';
		}
	}
?>
</body>
</html>