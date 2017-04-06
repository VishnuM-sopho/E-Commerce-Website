
<?php
require("../controllers/config.php"); 
    $_SESSION["id"]=$_GET['id'];
    if(isset($_GET["sale"]))
    render("/portfolio.php",["id" => $_SESSION["id"],"change" => $_GET["change"],"sale" => $_GET["sale"]]);
    else
    render("/portfolio.php",["id" => $_SESSION["id"],"change" => $_GET["change"]]);

?>
