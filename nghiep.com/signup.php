<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign up</title>
<?php include 'hardware/head.php'; ?>
</head>
<body>
<?php $page='signup'; include 'hardware/navbar.php'; ?>



<div class="container">
	<img src="pictures/logoBK.jpg" alt="Logo" class="logo">
  <h2> Register </h2>
  <form action="./hardware/reg.php" method="POST">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
	<div class="form-group">
      <label for="pwd">Confrim Password:</label>
      <input type="text" class="form-control" id="conpwd" placeholder="Confrim password" name="conpwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="agree">I agree with the terms and conditions</label>
    </div>
	
    <button type="submit" name="register" value="Register" class="btn btn-success">Register</button>
  </form>
</div>

<p></p>

<?php include 'hardware/footer.php'; ?>
</body>
</html>