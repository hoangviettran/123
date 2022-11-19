<?php
session_start();
$_SESSION["username"] = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign In</title>
<?php include 'hardware/head.php'; ?>
</head>
<body>
<?php $page='login'; include 'hardware/navbar.php'; ?>


<div class="container">
	<img src="pictures/logoBK.jpg" alt="Logo" class="logo">
  <h2> login </h2>
  <form action="./hardware/in.php" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div>
      <p><a href="signup.php">Register now</a></p>
    </div>
    <button type="submit" name="login" value="Login" class="btn btn-success">Login</button>
  </form>
</div>

<p></p>

<?php include 'hardware/footer.php'; ?>
</body>
</html>