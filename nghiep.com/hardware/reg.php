<?php
session_start();
?>
<?php 
$localhost='localhost';
$dbusername='root';
$dbpass='';
$dbname='myDB';
 if(isset($_POST["register"]))  
 {
 $connect = mysqli_connect("$localhost","$dbusername","$dbpass","$dbname");
if(($_POST["pwd"]) != ($_POST["conpwd"]))  
{ echo '<script>alert("password does not match")</script>';}
else if(empty($_POST["email"]) || empty($_POST["pwd"]) || empty($_POST["username"]))  
{  
     echo '<script>alert("fields cannot be empty")</script>';  
}  
else  
{
     if(!empty($_POST["pwd"])) {
          $password = test_input($_POST["pwd"]);
          if (strlen($_POST["pwd"]) <= 8) {
              echo '<script>alert("Your Password Must Contain At Least 8 Characters!")</script>';
                   
          }
          elseif(!preg_match("#[0-9]+#",$password)) {
               echo '<script>alert("Your Password Must Contain At Least 1 Number!")</script>';
          }
          elseif(!preg_match("#[A-Z]+#",$password)) {
               echo '<script>alert("Your Password Must Contain At Least 1 Capital Letter!")</script>';
          }
          elseif(!preg_match("#[a-z]+#",$password)) {
               echo '<script>alert("Your Password Must Contain At Least 1 Lowercase Letter!")</script>';
          }
          else{
               $username = mysqli_real_escape_string($connect, $_POST["username"]);  
               $email = mysqli_real_escape_string($connect, $_POST["email"]);  
               $password = mysqli_real_escape_string($connect, $_POST["pwd"]); 
                
               $password = password_hash($password, PASSWORD_DEFAULT);  
               $query = "INSERT INTO users (name, username, password, level) VALUES('$username', '$email', '$password', 0)";  
               if(mysqli_query($connect, $query))  
               {  
                    echo '<script>alert("Registration Done")</script>';
                    header("location:../login.php");
               }  
          }
     }
     
	      
}
}
function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
 ?>