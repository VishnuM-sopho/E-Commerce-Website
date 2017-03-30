
<?php

    // configuration
    require("../controllers/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("password_form.php", ["title" => "Change Password"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        if (empty($_POST["old_password"]))
        {
            apologize("You must provide your old password.");
        }
        
        //if field 2 is empty
        else if (empty($_POST["new_password"]))
        {
            apologize("You must provide a new password.");
        }
        
        //if field 3 is empty
        else if (empty($_POST["confirm_password"]))
        {
            apologize("You must confirm your new password again.");
        }
        $id=$_SESSION["id"];
        $query="select password from users where id=$id";
        if(!mysqli_query($conn,$query))
            print(mysqli_error($conn));
        $result=mysqli_query($conn,$query);
        $rows=mysqli_fetch_assoc($result);
        $old=$rows["password"];
        if($old!=$_POST["old_password"])
        {
            apologize("Old Password is Incorrect.");
        }
        
        //if old and new password are same
        if ($_POST["new_password"]==$_POST["old_password"])
        {
            apologize("Old and New Passwords must not be same.");
        }
        
        //if new passwords not match
        if ($_POST["new_password"]!=$_POST["confirm_password"])
        {
            apologize("Confirmation of new password failed.");
        }
        
        //query to update password in the users table for current user
       $query=sprintf("UPDATE users SET hash = '%s' WHERE id = '%d'",  password_hash($_POST["new_password"], PASSWORD_DEFAULT),$_SESSION["id"]);
        if(!mysqli_query($conn,$query))
            print(mysqli_error($conn));
       $query=sprintf("UPDATE users SET password = '%s' WHERE id = '%d'",  $_POST["new_password"],$_SESSION["id"]);
        if(!mysqli_query($conn,$query))
            print(mysqli_error($conn));
        header('Location: ../public_html/display.php?id='.$_SESSION["id"]."&change=1");
    }

?>
