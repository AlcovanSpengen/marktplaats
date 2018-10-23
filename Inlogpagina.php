<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Login</title>
        <link rel="stylesheet" href="#">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300">
    </head>
<header>
<nav>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#news">Inloggen</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>
</header>
<body>
<div>
        <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Username/E-mail...">
        <input type="text" name="pwd" placeholder="Password...">
        <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php">Signup</a>
        <form action="logout.php" method="post">
        
        <button type="submit" name="logout-submit">Logout</button>
        </form>
    </div>
</body>
</html>