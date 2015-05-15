<?php

$name = "Javid's POS System";

?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javid POS System</title>
</head>

<body>
    <h1><?php echo $name ?></h1>

    <h2>Code Louisville PHP Project</h2>

<form id= "user_input" action="submit.php" method="post">
   <?php echo $name ?>
    <br>
    Sign up!
    <br>
    Name:<input type="text" name="name">
    <input type="submit">
    <br>
    <br>
<form id= "user_input" action="submit.php" method="post">
    <?php echo $email ?>
    Email address:<input type="email" name="email">
    <select>
  <option value="volvo">@gmail.com</option>
  <option value="saab">@yahoo.com</option>
  <option value="mercedes">@outlook.com</option>
  <option value="audi">@mail.com</option>
</select>
    <input type="submit">
    <button type="button">Submit</button>
    <br>
    <br>
    <?php echo $age ?>


    Age:<input type="number" name="age">
    <button type="button">Submit</button>
    <input type="submit">
</form>

    <footer>
    Copyright 2015 Javid Beykzadeh
    </footer>
</body>
</html>
