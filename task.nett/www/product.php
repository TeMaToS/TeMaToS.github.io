<?php
	include 'connect.php';
?>
<html>
<head>
</head>
<body>
<?php
if (isset($_GET['name'])){
		$name = $_GET['name'];
	$result = mysqli_query($conn, "SELECT
				*
			FROM
				products
			WHERE
			Name='$name'");

	if(!$result)
	{
		echo '<div class="cstext">Product could not be displayed, please try again later.</div>';
	}
	else
	{
		if(mysqli_num_rows($result) == 0)
		{
			echo '<div class="cstext">There is no matched product</div>';
		}
		else
		{
				
				
			while($row = mysqli_fetch_assoc($result))
			{				
			echo '<div class="goods">Product:' . $row['Name']. '</br>Model:' .$row['Model']. '</div>' ;
			}
		}
	}
}

?>
</body>
</html>