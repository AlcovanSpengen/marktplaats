<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Marktplaats | SignedUp</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300">
    </head>
<header>
<nav>
    <ul>
        <li><a href="Home.html">Home</a></li>
        <li><a href="Inlogpagina.html">Inloggen</a></li>
        <li><a href="signup.html">Aanmelden</a></li>
        <div class="dropdown">
            <button class="dropbtn">Mijn marktplaats 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                  <a href="#">Mijn Advertenties</a>
                  <a href="#">Favorieten</a>
                  <a href="#">Profiel</a>
                  <a href="#">Uitloggen</a>
            </div>
        </div>
        <li><a href="advertentie.html">Plaats advertentie</a></li>
    </ul>
</nav>

</header>
<body>
   <p>Welkom <?php echo $_POST["username"] ?></p>
   <p>U bent nu ingelogd !!!</p>
</body>
</html>