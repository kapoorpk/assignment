<?php
session_start();
if(isset($_SESSION['email'] ) )
{

  
    $email=$_SESSION['email'];
    $username=$_SESSION['username'];
    $profile_picture=$_SESSION['profile_picture'];

   
}
else{
    echo "<script>window.open('index.php','_self')</script>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  header {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    text-align: center;
  }
  #profile-pic {
    display: block;
    margin: 20px auto;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background-color: #ccc; /* Placeholder color */
  }
  #welcome-message {
    text-align: center;
    margin-bottom: 20px;
  }
  footer {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
  }
  nav ul {
  list-style: none;
  padding: 0;
  margin: 0;
  text-align:right;
}

nav ul li {
  display: inline;
  margin-right: 20px;
}

nav ul li:last-child {
  margin-right: 0;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
}

  
</style>
</head>
<body>

<header>
  <h1>Dashboard</h1>
  <nav>
      <ul>

        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
</header>

<img src="uploads/<?php echo $profile_picture; ?>" id="profile-pic" alt="">

<div id="welcome-message">
  <h2>Welcome, <?php echo $username;?>!</h2>
</div>

<footer>
  <p>&copy; 2024 Copyright</p>
</footer>

</body>
</html>
