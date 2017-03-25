<?php

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("helpers.php");
    
    date_default_timezone_set("Asia/Kolkata");
    
    //connecting to database
    $conn = mysqli_connect("localhost", "jharvard","crimson","olx")or die ("could not connect to mysql");;
    
    $colleges = array('Select College','All','MNIT Jaipur','NIT Jalandhar',"IIT Bombay","IIT Delhi","IIT Kharagpur","IIT Kanpur","IIT Madras","IIT Guwahati","IIT Roorkee","IIT (BHU) Varanasi");
    $category = array('Select Category', 'All', 'Books', 'Clothing', 'Electronics', 'Furniture', 'Sports', 'Vehicle', 'Others');
    
    // enable sessions
    session_start();

   

?>
