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
   <p>Dank u voor het plaatsen van uw advertentie!</p>
    
   <p>Titel: <?php echo $_POST["naamadvertentie"] ?></p>
   <p>Beschrijving: <?php echo $_POST["beschrijvingadvertentie"] ?></p>
   <p>Rubriek: <?php echo $_POST["rubriek"] ?></p>
   <p>Prijs: €<?php echo $_POST["prijs"] ?></p>
   
   <?php
   $target_dir = "uploads/";
   $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   // Check if image file is a actual image or fake image
   if(isset($_POST["submit"])) {
       $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
       if($check !== false) {
           echo "File is an image - " . $check["mime"] . ".";
           $uploadOk = 1;
       } else {
           echo "File is not an image.";
           $uploadOk = 0;
       }
   }
   // Check if file already exists
   if (file_exists($target_file)) {
       echo "Sorry, file already exists.";
       $uploadOk = 0;
   }
   // Check file size
   if ($_FILES["fileToUpload"]["size"] > 500000) {
       echo "Sorry, your file is too large.";
       $uploadOk = 0;
   }
   // Allow certain file formats
   if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
   && $imageFileType != "gif" ) {
       echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
       $uploadOk = 0;
   }
   // Check if $uploadOk is set to 0 by an error
   if ($uploadOk == 0) {
       echo "Sorry, your file was not uploaded.";
   // if everything is ok, try to upload file
   } else {
       if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
           echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
       } else {
           echo "Sorry, there was an error uploading your file.";
       }
   }
   ?>
</body>
</html>