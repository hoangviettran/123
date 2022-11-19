<?php

$localhost='localhost';
$dbusername='root';
$dbpass='';
$dbname='myDB';


$con= new mysqli($localhost, $dbusername, $dbpass);
// Check connection
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
 
// Create  database
$sql = "CREATE DATABASE $dbname";
if ($con->query($sql) === TRUE) {
echo "Database created successfully";
} else {
echo "Error creating database: " . $con->error;
}
 
$con = mysqli_connect("$localhost","$dbusername","$dbpass","$dbname");
 

// sql to create product table
$sql = "CREATE TABLE products(
  productID INT NOT NULL AUTO_INCREMENT,
  product_name VARCHAR(250),
  Price INT(100),
  PRIMARY KEY (productID)
  )";
  if ($con->query($sql) === TRUE) {
  echo "Table products created successfully";
  } else {
  echo "Error creating table products: " . $con->error;
  }


$sql = "CREATE TABLE users(
userID INT NOT NULL AUTO_INCREMENT,
name VARCHAR(250),
username VARCHAR(250),
password VARCHAR(100),
level INT,
PRIMARY KEY (userID)
)";
if ($con->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating users table: " . $con->error;
}


//insert product table
$conn = mysqli_connect($localhost, $dbusername, $dbpass, $dbname);
if (!$conn) { die("Connection failed: " . mysqli_connect_error());}

$sql = "INSERT INTO products (product_name, Price)
VALUES ('Raspberry Pi 4 Model B – 4 GB RAM', '5000')";

if (mysqli_query($conn, $sql)) { echo "New record created successfully";} 
else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
mysqli_close($conn);


$conn = mysqli_connect($localhost, $dbusername, $dbpass, $dbname);
if (!$conn) { die("Connection failed: " . mysqli_connect_error());}

$sql = "INSERT INTO products (product_name, Price)
VALUES ('Odroid-XU4', '2000')";

if (mysqli_query($conn, $sql)) { echo "New record created successfully";} 
else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
mysqli_close($conn);


$conn = mysqli_connect($localhost, $dbusername, $dbpass, $dbname);
if (!$conn) { die("Connection failed: " . mysqli_connect_error());}

$sql = "INSERT INTO products (product_name, Price)
VALUES ('ASUS Tinker Board RK3288', '7000')";

if (mysqli_query($conn, $sql)) { echo "New record created successfully";} 
else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
mysqli_close($conn);

//insert user table

$conn = mysqli_connect($localhost, $dbusername, $dbpass, $dbname);
if (!$conn) { die("Connection failed: " . mysqli_connect_error());}

$sql = "INSERT INTO users (name, username, password, level)
VALUES ('Johnny Danger', 'JohnnyDanger@gmail.com', '0359687412', 0)";

if (mysqli_query($conn, $sql)) { echo "New record created successfully";} 
else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
mysqli_close($conn);


$conn = mysqli_connect($localhost, $dbusername, $dbpass, $dbname);
if (!$conn) { die("Connection failed: " . mysqli_connect_error());}

$sql = "INSERT INTO users (name, username, password, level)
VALUES ('Betty Safe', 'BettySafe@gmail.com', '0689627446', 0)";

if (mysqli_query($conn, $sql)) { echo "New record created successfully";} 
else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
mysqli_close($conn);


$conn = mysqli_connect($localhost, $dbusername, $dbpass, $dbname);
if (!$conn) { die("Connection failed: " . mysqli_connect_error());}

$sql = "INSERT INTO users (name, username, password, level)
VALUES ('Admin', 'Admin@gmail.com', '12345', 1)";

if (mysqli_query($conn, $sql)) { echo "New record created successfully";} 
else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
mysqli_close($conn);


$conn = mysqli_connect($localhost, $dbusername, $dbpass, $dbname);
if (!$conn) { die("Connection failed: " . mysqli_connect_error());}

$sql = "INSERT INTO users (name, username, password, level)
VALUES ('Chistina Avarado', 'ChistinaAvarado@gmail.com', '0258413692', 0)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
