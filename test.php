<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My first PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        background-color: #222;
        color: #fff;
    }
    .test {
        color: red;
    }
    </style>
</head>
<body>
<?php
$class = "TE16";
echo "<div>";
echo "<p>Hello $class</p>";
echo "<p>Hello ($class)</p>";
echo "<p>Hello $class</p>";

echo "<p class=\"test\">ultra nice</p>";

$name = $_GET['name'];

echo "<h1>" . $name . "</h1>";

echo "<h2>" . $_GET['mer'] . "</h2>";

var_dump($_GET);

echo "<p>cool dude</p>";

echo "<p>nice</p>";
echo "</div>";
?>
</body>
</html>