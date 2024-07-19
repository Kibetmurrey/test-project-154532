<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>


<header>
    <h1>Volkswagen</h1>
</header>

<nav>
   
    <a href="buyVW.html">Buy a VW</a>
    <a href="about.html">About us</a>
    <a href="contact.html">Contact us</a>
    <a href="financing.html">PAYMENT</a>
    <a href="login.php ">Login</a>
    <a href="register.php">Signup</a>
</nav>

<div class="hero">
    <h1>Welcome to Volkswagen</h1>
</div>

<div class="content">
    <h2>About Volkswagen</h2>
    <p>
        Welcome to Volkswagen, a place where innovation meets tradition. Since our inception in 1937, we have been at the forefront of the automotive industry, producing vehicles that are not only reliable but also bring a sense of excitement and joy to driving. Our commitment to quality and excellence has made us a household name, trusted by millions around the world.
    </p>
    <h2>Our Models</h2>
    <p>
        Explore our wide range of vehicles designed to meet your every need. From the iconic Golf and the versatile Tiguan to the revolutionary ID. series, there’s a Volkswagen for everyone. Each model is engineered with precision, featuring the latest in automotive technology, safety features, and innovative design.
    </p>
    <h2>Our Services</h2>
    <p>
        At Volkswagen, we provide a comprehensive range of services to ensure your vehicle remains in top condition. Our expert technicians are trained to provide the highest level of service, whether it’s routine maintenance or more complex repairs. Visit our service centers and experience the Volkswagen difference.
    </p>
</div>

<div class="footer">
    &copy; 2024 Volkswagen. All Rights Reserved.
</div>
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>