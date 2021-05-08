<?php include 'quranohadeessite/_dbconnect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="img/android-icon-36x36.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Quran O Hadees</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h1 style="color:white;">Welcome to Quran O Hadees.com</h3>
        <p style="color:white;">Enter your details and submit this form to confirm you are not a robot </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg' style='color: rgb(196, 28, 196);'>Thanks for submitting your form. We are know now you are not a robot.</p>";
        echo "<form action='quranohadeessite/index.php' method='post'>
    <button class='btn' style='padding:14px 471px;'>Go to site</button>
    </form>
        ";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <!-- <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea> -->
            <button class="btn">Submit</button> 
        </form>
    </div>
    <div class="bg-light py-4" style="color:white;">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">© 2021-2023 Quran O Hadees All rights reserved.</p>
      </div>
    </div>
    <script src="index.js"></script>
    
</body>
</html>
