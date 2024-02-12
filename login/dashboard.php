<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Project</title>
    <link rel="stylesheet" href="Untitled-2.css">
  </head>
  <body>

    <header>
      <div id="upperHeader">
          <div id="logo">
              <img src="Images/Logo.png">
          </div>

          <div id="headerFeatures">
                <p style="font-size: 18px;"><a href="logout.php">Logout</a></p>
                <div id="searchbar">
                    <input type="search" style="width: 300px; height: 30px; ">
                    <button><img src="Images/Search.png" style="height: 20px; margin-left: -40px;"></button>
                </div>
            </div>
      </div>
      <nav>
          <ul class="navbarLinks">
              <li><a href="index.html">Home</a></li>
              <li><a href="Advice.html">Advice</a></li>
              <li><a href="Money.html">Money</a></li>
              <li><a href="About.html">About</a></li>
              <li><a href="Contact.html">Contact Us</a></li>
          </ul>
      </nav>
  </header>

	<div id="container">
		<h1>Hello, <?php echo $user_data['user_name']; ?></h1>
	</div>

  

	<footer>
        <div class="footerlists">
            <div class="footerlists1">
                <ul>
                    <li><b>Legal</b></li>
                    <li><a>T&C's</a></li>
                    <li><a>Privacy</a></li>
                    <li><a>Lorum</a></li>
                </ul>
            </div>
            <div class="footerlists2">
                <ul>
                    <li><b>Help</b></li>
                    <li><a>FAQ</a></li>
                    <li><a>Contact</a></li>
                    <li><a>About us</a></li>
                </ul>
            </div>
            <div class="footerlists3">
                <ul>
                    <li><b>Follow us</b></li>
                    <li><a href="https://www.facebook.com">Facebook</a></li>
                    <li><a href="https://www.Twitter.com">Twitter</a></li>
                    <li><a href="https://www.Instagram.com">Instagram</a></li>
                </ul>
            </div>
        </div>
    </footer>

<script src="Untitled-3.js"></script>
</body>
</html>
	