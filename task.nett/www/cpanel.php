<?php
	include 'connect.php';
?>
<html>
<head>
</head>
<body>
<?php
	if($_SESSION['privileges'] == 1){
		echo '
			<div>Create category
				<form method="POST">
				<input type="text" name="cat_name">
				<input list="categories" name="cat_id">
				<datalist id="categories">';
					$query = "SELECT DISTINCT Name FROM categories";
					$result = mysqli_query($conn, $query);
					$rows = mysqli_fetch_all($result, MYSQLI_BOTH);
					if($result)
						for($i = 0; isset($rows[$i]['Name']); $i++)
							echo '<option value="', $rows[$i]['Name'], '">';
		echo	'</datalist>
				<input type="submit" name="submit">
				</form>
			</div>
			<div>Create Product
				<form method="POST">
				<input type="text" name="name">
				<input type="text" name="model">
				<select name="cat_id_prod">';
					$query = "SELECT DISTINCT Name FROM categories";
					$result = mysqli_query($conn, $query);
					$rows = mysqli_fetch_all($result, MYSQLI_BOTH);
					if($result)
						for($i = 0; isset($rows[$i]['Name']); $i++)
							echo '<option value="', $rows[$i]['Name'], '">', $rows[$i]['Name'] ,'</option>';
		echo	'</select>
				<input type="submit" name="submit">
				</form>
			</div>
			';
	}
?>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST["submit"]) && isset($_POST["cat_name"])){
			$cat_name = $_POST["cat_name"];
			$cat_id = $_POST["cat_id"];
			$query = "INSERT INTO  categories(Name, Cat_id) VALUES('$cat_name', '$cat_id')";
			$result = mysqli_query($conn,$query);
			if($result)
				echo "Your category was succesfully created!";
			else
				echo "Something wrong";
		}
		if(isset($_POST["submit"]) && isset($_POST["name"])){
			$name = $_POST["name"];
			$model = $_POST["model"];
			$cat_id_prod = $_POST["cat_id_prod"];
			$query = "INSERT INTO  products(Name, Model, Cat) VALUES('$name', '$model', '$cat_prod_id')";
			$result = mysqli_query($conn,$query);
			if($result)
				echo "Your prduct was succesfully created!";
			else
				echo "Something wrong";
		}
	}
?>
</body>
</html>