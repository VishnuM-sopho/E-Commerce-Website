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
    <div id="d1"><img id="i1" src="../public_html/images/logo.png"</div>
        <div class="container">

            <div id="top">
                <div>
                    <p style="text-align:right; margin-right:50px;">
                         <?php if (empty($_SESSION["id"])): ?>
                            <a href="../public_html/login_form.php">Go back to Login</a>&nbsp;&nbsp;
                            <a href="../public_html/register_form.php">Go back to Register</a>&nbsp;&nbsp;
                            
                        <?php endif ?>
                       <?php if (!empty($_SESSION["id"])): ?>
                            <a href="../public_html/postad.php?id=<?php echo $_SESSION['id'];?>">Want to sell item</a>&nbsp;&nbsp;
                            <a href="../public_html/password_form.php">  Change Password</a>
                            <a href="../public_html/store.php">Go To Store</a>
                            <a href="../models/logout.php">Logout</a>
                        <?php endif ?>
                    </p>
                </div>
                
                <?php if (!empty($_SESSION["id"])): ?>
                    <h4>Welcome, <?= $user_name ?></h4>
                <?php endif ?>
                
                <?php if (!empty($_SESSION["id"]) && (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "store.php")): ?>
                
                <nav class="navbar navbar-inverse">
                    <ul class="nav navbar-nav">
                        <?php
                            if(basename($_SERVER["SCRIPT_FILENAME"]) == "index.php")
                                $current = "";
                            else
                                $current = basename($_SERVER["SCRIPT_FILENAME"]);
                            
                            printf('<li><a href="/%s">%s</a></li>', $current, $category[1]);
                            for($i=2; $i<sizeof($category); $i++)
                                printf('<li><a href="/%s?category=%d">%s</a></li>', $current, $i, $category[$i]);
                        ?>
                        <li><a href="/logout.php"><strong>Log Out</strong></a></li>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account&nbsp;&nbsp; </a></li>
                    </ul>
                </nav>
                
                <?php endif ?>
            </div>

            <div id="middle">
