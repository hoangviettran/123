<?php
session_start();
$localhost='localhost';
$dbusername='root';
$dbpass='';
$dbname='myDB';
if(isset($_POST["login"]))  
 {  
	$connect = mysqli_connect("$localhost","$dbusername","$dbpass","$dbname");
      if(empty($_POST["email"]) || empty($_POST["pwd"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $email = mysqli_real_escape_string($connect, $_POST["email"]);  
           $password = mysqli_real_escape_string($connect, $_POST["pwd"]);  
           $query = "SELECT * FROM users WHERE username = '$email'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
                          //return true; 
			           echo '<script>alert("Login successful")</script>'; 
                          $_SESSION["username"] = $email;  
                          header("location:../index.php");  
                     }  
                     else  
                     {  
                          //return false;  
                          //echo '<script>alert("Wrong User Details")</script>';
                          echo '<script>alert("Wrong User")</script>';   
                     }     
                }  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
?>