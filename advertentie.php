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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Marktplaats | New Advertisement</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="javascript.js"></script>
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


    <h1>New Advertisement</h1>
    <section class="nieuwadv">
        <form action="geplaatst.php" method="post" enctype="multipart/form-data">
            <h2>Select your category:</h2>
                <select name="rubriek"><br>
                        <option value="elektronica">elektronica</option>
                        <option value="cd's en dvd's">cd's en dvd's</option>
                        <option value="fietsen en brommers">fietsen en brommers</option>
                        <option value="sport en fitness">sport en fitness</option>
                </select><br>
                <input type="text" name="naamadvertentie" placeholder="Title" required><br>
                <textarea name="beschrijvingadvertentie" placeholder="Description" rows="5" cols="30" required></textarea><br>
                <input type="text" name="prijs" placeholder="Price">
            <h2>Upload Foto</h2>
                <div id="wrapper">
                    <input id="fileUpload" name="fileUpload" type="file" multiple />
                    <br />
                    <div id="image-holder"></div>
                </div>
                <input type="submit" value="Place Advertisement" name="submit">      
        </form>
    </section>
    <div class="gallery-upload">
        <h3>PHP File upload (Size &lt; 10mb, File types: jpg, jpeg, png)</h3>
        <form action="gallery-upload.php" method="post" enctype="multipart/form-data">
            <input type="text" name="filename" placeholder="File name..."><br />
            <input type="text" name="filetitle" placeholder="Image title..."><br />
            <input type="text" name="filedesc" placeholder="File description..."><br />
            <input type="hidden" name="MAX_FILE_SIZE" value="9999999" /><br />
            <input type="file" onchange="readURL(this);" name="file"><br />
            <img id="blah" src="http://placehold.it/180" alt="your image" />
            <button type="submit" name="submit">Upload</button>
        </form>
    </div>
    
    <script src="javascript.js"></script>
</body>
</html>