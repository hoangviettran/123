<?php
session_start();
?>
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Search page</title>
<?php include 'hardware/head.php'; ?>
</head>
<body>
<?php $page='search'; include 'hardware/navbar.php'; ?>

<p><br></p>

<div class="row">
  <div class="col-lg-4"></div>
  <div class="col-lg-4 center-block"><h1>SEARCH</h1>

	<form method="post" action="hardware/search_processing.php">
	<input type="text" class="form-control" id="search_para" name="search_para">
	<p><br></p>
	<button type="submit" name="Search" value="Search" class="btn btn-success">Search</button>
	</form>
<p><br></p>
</div>
  <div class="col-lg-4"></div>
</div>

<?php include 'hardware/footer.php'; ?>
</body>
</html>