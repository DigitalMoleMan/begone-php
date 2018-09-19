<?php
session_start();
if(isset($_POST['submit'])){
    $loginCredentials = [
        'username' => "admin",
        'password' => "admin"
    ];

    if(isset($_POST['username']) && isset($_POST['password'])) {

        $username = filter_input(INPUT_POST, "username", FILTER_SANETIZE_STRING);
        $password = md5($_POST['password']);

        if($username == $loginCredentials['username']
        && $password == $loginCredentials['password'])
        {
            echo "<h1>nice</h1>";
        } 

        elseif ($username != $loginCredentials['username']
        || ($password != $loginCredentials['password'])
        {
            echo "<h1>oof</h1>";
        }
    
    echo "<pre>" . var_dump($_POST) . "</pre>";
}
?>