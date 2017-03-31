
<?php
    // configuration
    require("../controllers/config.php");

     //if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("../public_html/register.html", ["title" => "Register"]);
    }
    // else if user reached page via POST (as by submitting a form via POST)
     if ($_SERVER["REQUEST_METHOD"] == "POST")
    {   
        //if text filed is empty
        if (empty($_POST["email"]))
        {
            apologize("You must provide your email address.");
        }
        
        else if (empty($_POST["name"]))
        {
            apologize("You must provide your first name.");
        }
        
        else if ($_POST["cid"]==0)
        {
            apologize("You must select your college.");
        }
        
        //if password field 1 is empty
        else if (empty($_POST["pwd"]))
        {
            apologize("You must provide your password.");
        }
        
        //if password field 2 is empty
        else if (empty($_POST["rpwd"]))
        {
            apologize("You must provide your password again.");
        }
        
        else if (!isset($_POST["sex"]))
        {
            apologize("You must select a gender.");
        }
        $rex="/\w+@[a-z]+\.[a-z]+\.*[a-z]*/";
        if(!preg_match($rex,$_POST["email"]))
          apologize("Invalid email address");
        //if passwords do not match
        if ($_POST["pwd"]!=$_POST["rpwd"])
        {
            apologize("Confirm password must match with the password.");
        
            $_SESSION["id"]=NULL;
        }
        
        extract($_POST);
        $password=password_hash($pwd, PASSWORD_DEFAULT);
        if($sex=="0")
            $gender="M";
        else
            $gender="F";
        
        $email=mysqli_real_escape_string($conn,$email);
        $password=mysqli_real_escape_string($conn,$password);
        $id=mt_rand(10,100);
        $query="Select first_name from users where email='$email'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)!=0)
            apologize("User already registered",1);
        else{
        //query to insert the details of new user in users table
       $result="INSERT IGNORE INTO users (id,first_name,email,password,hash,college_id,gender) VALUES($id,'$name','$email','$pwd','$password','$cid','$gender')";
        mysqli_query($conn, $result);
        $query = "SELECT id from users where email='$email'";
            $result = mysqli_query($conn, $query);
            $rows=mysqli_fetch_assoc($result);
            $_SESSION["id"]=$rows["id"];
            redirect("../public_html/display.php?id=".$_SESSION["id"]."&change=0");
            }
    }


?>
