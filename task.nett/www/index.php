<?php
	include 'connect.php';
?>
<html>
<head>
<link rel="stylesheet" href="main.css">
</head>
<body>
<?php
if(!isset($_SESSION['nickname']))
	echo '
		<div>
		<a href="login.php">Login</a>
		<a href="registration.php">Registration</a>
		</div>';
else
	echo 'hi ', $_SESSION['nickname'], '!';
if($_SESSION['privileges'] == 1)
	echo '<a href="cpanel.php">cPanel</a>';
?>
<div>
<?php
if (isset($_GET['cat_id']))
	$cat_id = $_GET['cat_id'];
else
	$cat_id = "main";
$result = mysqli_query($conn, "SELECT
			*
		FROM
			categories
		WHERE
		Cat_id='$cat_id'");

if(!$result)
{
	echo '<div class="cstext">The categories could not be displayed, please try again later.</div>';
}
else
{
	if(mysqli_num_rows($result) == 0)
	{
		echo '<div class="cstext">No categories defined yet.</div>';
	}
	else
	{
			
			
		while($row = mysqli_fetch_assoc($result))
		{				
			echo '<div style="margin-top:2px;"><a href="index.php?cat_id=' . $row['Name'] . '">' . $row['Name'] . '</a></div>' ;
		}
	}
}
?>

<div>Products:
<?php
if (isset($_GET['cat_id']))
	$cat_id = $_GET['cat_id'];
else
	$cat_id = "main";
$result = mysqli_query($conn, "SELECT
			*
		FROM
			products
		WHERE
		Cat='$cat_id'");

if(!$result)
{
	echo '<div class="cstext">The categories could not be displayed, please try again later.</div>';
}
else
{
	if(mysqli_num_rows($result) == 0)
	{
		echo '<div class="cstext">No products defined in this category yet.</div>';
	}
	else
	{
			
			
		while($row = mysqli_fetch_assoc($result))
		{				
		echo '<div class="goods""><a href="product.php?name=' . $row['Name'] . '&model='.$row['Model'].'">' . $row['Name'] . '</a></div>' ;
		}
	}
}


?>
</div>
</div>
</body>
</html>