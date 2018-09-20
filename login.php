<?php
session_start();
if(isset($_POST['submit']))
{
   include 'db.php';

    if(isset($_POST['username']) && isset($_POST['password']))
    {

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
        $password = $_POST['password'];

        if($username == $loginCredentials['username']
        && password_verify($password, $loginCredentials['password']))
        {
            echo "<h1>nice</h1>";
        } 
        elseif ($username != $loginCredentials['username']
        || !$password_verify($password, $loginCredentials['password']))
        {
            echo "<h1>oof</h1>";
        }
    }
}
?>