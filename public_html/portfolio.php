<?php

require("../controllers/config.php");
    $id = $_SESSION["id"];
    $query="Select * from store where id='$id'";
    $result=mysqli_query($conn,$query);
    $rows=mysqli_fetch_assoc($result);
    if(count($rows)==0)
        print("<h3>You have not put anything on sale</h3>");

?>
