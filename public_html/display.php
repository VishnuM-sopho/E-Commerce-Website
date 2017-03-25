

<?php
require("../controllers/config.php"); 
    $_SESSION["id"]=$_GET['id'];
    render("/portfolio.php",["id" => $_SESSION["id"],"change" => $_GET["change"]]);
?>
