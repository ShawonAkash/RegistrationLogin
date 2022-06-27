<!--
this is second header file which is visible after login.
-->

<?php
include_once('link.php');
require_once('connection.php');
session_start();

$email = $_SESSION['email'];
?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">Registration Login</a>
		
			<form action="" method="post">
        <input type="text" placeholder="Search" name="search">
        <button  type="submit" name="submit" placeholder="product">Search</button>
    </form>
    
	</div>
       
		<div class="navbar-header" id="middle">
	    </div>
		<div class="dropdown navbar-right" id="right">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email;?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  	<li><a href="account.php">Account</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
	</div>
</nav>
<?php
if (isset($_POST['submit'])) {
    
            header("Location: search.php");
        }

      
      


  


?>