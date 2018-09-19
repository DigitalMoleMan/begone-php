<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>gissa.php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="" method="GET">
    <input  id="gissa" type="text" name="gissa">
    <input id="submit" type="submit" name="submit"> 
</form>

<?php

session_start();
echo "<div id='info'>";

if (empty($_SESSION["number"])) {
    $_SESSION["number"] = rand(0, 9);
    $_SESSION["guesses"] = 0;
    $_SESSION["streak"] = 0;
}
if(isset($_GET['submit'])) {
    $_SESSION["guesses"] += 1;
    echo "Guessed number: " . $_GET['gissa'] . "<br>";
    echo "You have " . (10 - ($_SESSION["guesses"] + $_SESSION["streak"])) . "guessesleft" . "<br>";

    if ($_GET['gissa'] < $_SESSION["number"]) {
        echo "Higher!" . "<br>";
    }
    if ($_GET['gissa'] > $_SESSION["number"]) {
        echo "Lower!" . "<br>";
    }

    if ($_SESSION["guesses"] > 10 - $_SESSION["streak"]) {
        echo "You are a failure :)" . "<br>";
        
        $_SESSION["number"] = rand(0, 9);
        $_SESSION["streak"] = 0;
    }

    if ($_GET['gissa'] == $_SESSION["number"]) {
        echo "You guessed right in only " . $_SESSION["guesses"] ." tries!" . "<br>";
        $_SESSION["streak"] += 1;
        $_SESSION["number"] = rand(0, 9);
        $_SESSION["guesses"] = 0;
    } 
    
    
}
echo "</div>";
?>
    
</body>
</html>