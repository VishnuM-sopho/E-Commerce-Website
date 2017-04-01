<?php 
require("../views/title.php"); ?>
<!DOCTYPE html>

<html>

    <head>

        <link href="../public_html/css/style.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title><?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>OLX CLONE</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <script src="../public_html/js/scripts.js"></script>

    </head>

    <body>
        
        <style>
         @import url(http://fonts.googleapis.com/css?family=Raleway);

nav {
   font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
	margin-top: 40px;
  padding: 20px;
  
  text-align: center;
  box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
}
#nav-1 {
  background: #5175C0;
  opacity : 0.85;
}

.link-1 {
  transition: 0.3s ease;
  background: #5175C0;
  color: #ffffff;
  font-size: 24px;
  text-decoration: none;
  border-top: 4px solid #5175C0;
  border-bottom: 4px solid #5175C0;
  padding: 16px 0;
  margin: 0 20px;
}
.link-1:hover {
  border-top: 4px solid #ffffff;
  border-bottom: 4px solid #ffffff;
  padding: 6px 0; 
}

h1 { color: #111; font-family: 'Helvetica Neue', sans-serif; font-size: 80px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center; }
h4 { color: white; font-family: 'Helvetica Neue', sans-serif; font-size:20px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center; opacity : 0.85;}

p{ color: #7a7c7f; font-size: 29px; font-family: "Libre Baskerville", serif; line-height: 45px; text-align: center; text-shadow: 0 1px 1px #fff; padding-top: 20px; }
        </style>
       <div class="container">

            <div id="top">
                <div>
                   
                   <nav id="nav-1">
                           <?php
                           $rex="/.*other\_items\.php.*/";
                           $rex2="/.*seller\.php.*/";
                           if(preg_match($rex,$_SERVER['REQUEST_URI']) || preg_match($rex2,$_SERVER['REQUEST_URI']))
               echo("<a class=\"link-1\" href=\"../public_html/store.php\">Go to Store</a>&nbsp;&nbsp;");
                           ?>
                   
                         <?php if (empty($_SESSION["id"])): ?>
                            <a class="link-1" href="../public_html/login_form.php">Login</a>&nbsp;&nbsp;
                            <a class="link-1" href="../public_html/register_form.php">Register</a>&nbsp;&nbsp;
                            <a class="link-1" href="../models/login.php">Sell Item</a>&nbsp;&nbsp;
                            
                        <?php endif ?>
                        
                       <?php if (!empty($_SESSION["id"])): ?>

                           <?php
                           $rex="/.*postad\.php.*/";
                           if(!preg_match($rex,$_SERVER['REQUEST_URI']))
           { echo("<a class=\"link-1\" href=\"../public_html/postad.php?id=");echo($_SESSION['id']);echo("\">Sell item</a>&nbsp;&nbsp");}
                           else
                           echo("<a class=\"link-1\" href=\"../models/login.php\">Dashboard</a>&nbsp;&nbsp");
                           ?>
                            <?php
                            $rex="/.*password\_form\.php.*/";
                            if(!preg_match($rex,$_SERVER['REQUEST_URI']))
       {  echo("<a class=\"link-1\" href=\"../public_html/password_form.php?name=");echo($user_name);echo("\">Change Password</a>");}
                            else
                            echo("<a class=\"link-1\" href=\"../models/login.php\">Dashboard</a>&nbsp;&nbsp");
                            ?>
                            
                            <?php
                                $rex="/.*store\.php.*/";
                                $rex2="/.*seller\.php.*/";
                                if(!preg_match($rex,$_SERVER['REQUEST_URI']) && !preg_match($rex2,$_SERVER['REQUEST_URI']))
                                echo("<a class=\"link-1\" href=\"../public_html/store.php\">Store</a>");
                                else
                                echo("<a class=\"link-1\" href=\"../models/login.php\">Dashbord</a>");
                            ?>

                            <a class="link-1" href="../models/logout.php">Logout</a>

                        <?php endif ?>
                    <?php

                    $rex="/.*seller\.php.*/";
                    if(preg_match($rex,$_SERVER['REQUEST_URI']))
            echo("<a class=\"link-1\" href=\"../public_html/other_items.php?id=".$_GET["id"]."\">View Other Items from this Seller</a>&nbsp;&nbsp");
                   else
                   echo("</nav>");
                    ?>
                </div>
                
                <?php if (!empty($_SESSION["id"])): ?>
                    <h4>Hey, <?= $user_name ?> :)</h4>
                <?php endif ?>
                
                
            </div>

            <div id="middle">
