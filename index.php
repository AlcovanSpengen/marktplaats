<?php
// Initialize the session
session_start();

?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marketplace | Home</title>
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
    <form action="searched.php" method="post">
        <div class="searchbar">
            <input type="text" name="productname" placeholder="Search..">
            <select name="rubriek"><br>
                <option value="elektronica">Alle rubrieken</option>
                <option value="elektronica">Elektronica</option>
                <option value="cd's en dvd's">Cd's en Dvd's</option>
                <option value="fietsen en brommers">Fietsen en Brommers</option>
                <option value="sport en fitness">Sport en Fitness</option>
        </select>
            <select name="afstand">
                <option value="alle afstanden">Alle afstanden</option>
                <option value="minder dan 3km">minder dan 3km</option>
                <option value="minder dan 5km">minder dan 5km</option>
                <option value="minder dan 10km">minder dan 10km</option>
                <option value="minder dan 15km">minder dan 15km</option>
                <option value="minder dan 25km">minder dan 25km</option>
                <option value="minder dan 50km">minder dan 50km</option>
            </select>
            <input type="submit" name="afstandbtn" value="Search"> 
        </div>
    </form>

    <h1>Home</h1>
           
</body>
</html>