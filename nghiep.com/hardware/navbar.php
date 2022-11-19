<!-- navbar begin -->
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		
		<ul class="nav navbar-nav">
    		<li><p class="navbar-btn">
        	<a href="index.php?page=home" class="btn btn-success <?php if($page=='home') {echo 'active';}?>">Home</a>
        	</p></li>
          
    		<li><div class="btn-group navbar-btn">
    			<a href="index.php?page=products" class="btn btn-success <?php if($page=='product') {echo 'active';}?>">Products</a>
    			<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
      			<span class="caret"></span>
    			</button>
    				<ul class="dropdown-menu scrollable-menu" role="menu">
      				    <li><a href="smartphone.php">Smartphone</a></li>
                    	<li><a href="tablet.php">Tablet</a></li>
                    	<li><a href="laptop.php">Laptop</a></li>
  			    </div>
			</li>
			<li><p class="navbar-btn">
        		<a href="index.php?page=contact" class="btn btn-success <?php if($page=='contact') {echo 'active';}?>">Contact</a>
        	</p></li>
    		<li><p class="navbar-btn">
        		<a href="index.php?page=aboutus" class="btn btn-success <?php if($page=='about') {echo 'active';}?>">About</a>
        	</p></li>
    		<li><p class="navbar-btn">
        		<a href="index.php?page=search" class="btn btn-success <?php if($page=='search') {echo 'active';}?>">Search <span class="glyphicon glyphicon-search"></span></a>
        	</p></li>
    	</ul>
        
    	<ul class="nav navbar-nav navbar-right">
        	<?php
    	    if($_SESSION['username']){
		    ?>
		        <li><p class="navbar-btn">
          		    <a href="hardware/out.php" class="btn btn-success">Logout 
			    <span class="glyphicon glyphicon-log-out"></span></a>
          	    </p></li>
                <li><button class="btn btn-link navbar-btn btn-xs"></button></li>
                <!-- I don't know how to seperate the sign up button from the edge of the bar, so I will so it like this -->		
		    <?php
		    } else {
			    $_SESSION["username"] = '';
		?>
      		<li><p class="navbar-btn">
          		<a href="login.php?page=login" class="btn btn-success <?php if($page=='login') {echo 'active';}?>">Login 
			<span class="glyphicon glyphicon-user"></span></a>
          	</p></li>
      		<li><p class="navbar-btn">
          		<a href="signup.php?page=register" class="btn btn-success <?php if($page=='signup') {echo 'active';}?>">Sign up 
			<span class="glyphicon glyphicon-log-in"></span></a>
          	</p></li>
            <li><button class="btn btn-link navbar-btn btn-xs"></button></li>
            <!-- I don't know how to seperate the sign up button from the edge of the bar, so I will so it like this -->
            <?php
		    }
		?>
    	</ul>
	</div>
</nav>
<!-- navbar end -->