<?php

    include('config/setup.php');
    $username='Anuasasdv v asaj';
    $password='123assadd4';

    $result = mysql_query("insert into users(username,password) values('$username','$password')") or die("Failed to query Database." .mysql_error());
    echo "got sql";
   echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Username or Password is Succes')
            </SCRIPT>");
?>
