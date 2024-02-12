<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
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
                <p style="font-size: 18px;"><a href="login.php">Login / Register</a></p>
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
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
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

