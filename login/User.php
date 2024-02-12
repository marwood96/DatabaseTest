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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
                <p style="font-size: 18px;"><a href="User.php">Login / Register</a></p>
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


  <form method="post">
    <div style="font-size: 20px;margin: 10px;color: white;">Login</div>

    <input id="text" type="text" name="user_name"><br><br>
    <input id="text" type="password" name="password"><br><br>

    <input id="button" type="submit" value="Login"><br><br>

    <a href="signup.php">Click to Signup</a><br><br>
  </form>



  

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
