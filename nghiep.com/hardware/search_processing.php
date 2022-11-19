<?php
session_start();
$localhost='localhost';
$dbusername='root';
$dbpass='';
$dbname='myDB';

if(isset($_POST["Search"])){ 
$connect = mysqli_connect("$localhost","$dbusername","$dbpass","$dbname");

      if(empty($_POST["search_para"]))  
      {  
           echo '<script>alert("Nothing to search")</script>';  
      }  
      else  
      {
		 
           $para = mysqli_real_escape_string($connect, $_POST["search_para"]);  
             
           $query = "SELECT * FROM products WHERE product_name = '$para' OR price = '$para'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
		while($results = mysqli_fetch_array($result)){
				$id = $results['productID'];
		}
		if ($id == 1) {header("location:../products/product1.php?page=product1");}
		else if ($id == 2) {header("location:../products/product2.php?page=product1");}
		else if ($id == 3) {header("location:../products/product3.php?page=product1");}
           }
	   else { echo "No results found";}
	}  
} 
?>