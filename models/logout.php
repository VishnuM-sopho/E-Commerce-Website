<?php require("../views/title.php"); ?>
<?php

    // configuration
    require("../controllers/config.php"); 

    // log out current user, if any
    logout();

    // redirect user
    redirect("../index.php");
     require("views/footer.php");
?>
