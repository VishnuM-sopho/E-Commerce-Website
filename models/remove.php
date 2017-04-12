<?php
require("../controllers/config.php");
render("null.php");
extract($_GET);
$query="delete from store where seller_id=$id and title='$title'";
if(!mysqli_query($conn,$query))
    print(mysqli_error($conn));
header('Location: ../public_html/display.php?id='.$_SESSION["id"]."&change=0&sale=1");
?>
