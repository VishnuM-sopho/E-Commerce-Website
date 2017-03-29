<?php

    // configuration
    require("../controllers/config.php"); 
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET" && empty($_SESSION["id"]))
    {   
        // else render form
        redirect("../public_html/login_form.html");
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST" || !empty($_SESSION["id"]))
    {    
        // validate submission
        if (empty($_POST["email"]))
        {   
            apologize("You must provide your email address.");
        }
        else if (empty($_POST["password"]))
        {   
            apologize("You must provide your password.");
        }
        else{
        
        $rex="/\w+@[a-z]+\.[a-z]+\.*[a-z]*/";
        if(!preg_match($rex,$_POST["email"]))
            apologize("Invalid email address");
        // query database for user
        $email=$_POST["email"];
        $rows = "SELECT * FROM users WHERE email ='$email'";
        $result=mysqli_query($conn,$rows);
        $rows=mysqli_fetch_assoc($result);
        // compare hash of user's input against hash that's in database
            if (password_verify($_POST["password"], $rows["hash"]))
            {   
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $rows["id"];
                
                header('Location: ../public_html/display.php?id='.$_SESSION["id"]."&change=0");
            }
            
        // else apologize
        apologize("Invalid E-mail address and/or password.");
       }
    }
       
?>
