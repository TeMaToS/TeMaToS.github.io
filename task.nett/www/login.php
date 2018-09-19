<?php
	include 'connect.php';
?>
<html>
<head>
</head>
<body>
<form method="post" action="login.php">
<input type="text" name="nick">
<input type="text" name="pass">
<input type="submit" name="submit">
</form>
<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			if(isset($_POST["submit"])){
				$nick = $_POST['nick'];
				$pass = $_POST['pass'];
				$query = "SELECT * FROM users WHERE Nickname='$nick' AND Password='".md5($pass)."'";
				$result = mysqli_query($conn,$query);
				$rows = mysqli_fetch_all($result, MYSQLI_BOTH);
				if(isset($rows[0]['ID'])){
					$_SESSION['nickname'] = $rows[0]['Nickname'];
					$_SESSION['logged'] = 1;
					$_SESSION['privileges'] = $rows[0]['Privileges'];
					echo "You are logged!";
				}
				else
					echo "Something wrong";
			}
		}
?>
</body>
</html>