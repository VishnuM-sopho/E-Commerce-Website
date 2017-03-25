<html>
<head><link href="../public_html/css/style.css" rel="stylesheet"/></head>
<body>
<a href="../models/login.php">Sell Item</a>
<a href="/public_html/store.php">Go to Store</a>
<a href=" ">View other items from this Seller</a>
</body>
</html>
<?php
require("../controllers/config.php");
$_SESSION["id"]=$_GET["id"];
$id=$_SESSION["id"];
?>
