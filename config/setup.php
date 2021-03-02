<?php 
    $connection = mysql_connect("localhost","root"); 
    if(!$connection) { 
    die("Database connection failed: " . mysql_error()); 
    }else{
    $db_select = mysql_select_db("coursemanagement",$connection); 
        if (!$db_select) { 
            die("Database selection failed:: " . mysql_error()); 
        } 
    }
?>
 