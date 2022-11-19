<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Products page</title>
<?php $page='product'; include 'hardware/head.php'; ?>
</head>
<body>
<?php include 'hardware/navbar.php'; ?>

<div class="container">
  <h2>Product</h2>
<div class="row">

  <div class="col-sm-4">
<h4>Products IDs</h4>
<?php
	$localhost='localhost';
	$dbusername='root';
	$dbpass='';
	$dbname='myDB';

	$conn = mysqli_connect($localhost, $dbusername, $dbpass, $dbname);
	if (!$conn) { die("Connection failed: " . mysqli_connect_error());}	

	$sql = "SELECT * FROM products;";
	$result = mysqli_query($conn, $sql);
	
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['productID']."<br>";
		}
	
	mysqli_close($conn);
?>
</div>

  <div class="col-sm-4">
<h4>Products Names</h4>
<?php
	$localhost='localhost';
	$dbusername='root';
	$dbpass='';
	$dbname='myDB';

	$conn = mysqli_connect($localhost, $dbusername, $dbpass, $dbname);
	if (!$conn) { die("Connection failed: " . mysqli_connect_error());}	

	$sql = "SELECT * FROM products;";
	$result = mysqli_query($conn, $sql);
	
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['product_name']."<br>";
		}
	
	mysqli_close($conn);
?>
</div>

  <div class="col-sm-4">
<h4>Products Prices</h4>
<?php
	$localhost='localhost';
	$dbusername='root';
	$dbpass='';
	$dbname='myDB';

	$conn = mysqli_connect($localhost, $dbusername, $dbpass, $dbname);
	if (!$conn) { die("Connection failed: " . mysqli_connect_error());}	

	$sql = "SELECT * FROM products;";
	$result = mysqli_query($conn, $sql);
	
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['Price']."<br>";
		}
	
	mysqli_close($conn);
?>
</div>

</div>  
</div>

<?php include 'hardware/footer.php'; ?>
</body>
</html>