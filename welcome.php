<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300">
</head>
<body>
<header>
        <div class="header"><p class="header-title">Marketplace</p></div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Log in</a></li>
            <li><a href="register.php">Register</a></li>
            <div class="dropdown">
                <button class="dropbtn">My account 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">My advertisements</a>
                    <a href="#">Favorites</a>
                    <a href="profile.php">Profile</a>
                    <a href="logout.php">Sign Out</a>
                </div>
            </div>
            <li><a href="advertentie.php">Place advertisement</a></li>
            <div class="loginstatus"><?php 
        if (isset($_SESSION['id'])) {
            echo '<p>You are logged in!</p>';
        }
        else {
            echo '<p>You are logged out!</p>';
        }
    ?></div>
        </ul>
        
    </nav>
    <section class="welcome">
    <div>
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. U are logged in!.</h1>
    </div>
    <p>
        <a href="reset-password.php">Reset Your Password</a>
        <a href="logout.php">Sign Out of Your Account</a>
    </p>
    </section>
</body>
</html>