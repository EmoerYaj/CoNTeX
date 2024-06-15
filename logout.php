<?php 
    session_start(); 
    session_destroy(); 
    echo "You Successfully Logout.";
    
    echo "Click here <a href='Loginpage.php'>To login</a>"; 

?>