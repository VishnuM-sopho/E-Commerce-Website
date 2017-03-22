<?php
    $query="Select * from store where seller='$email'";
    $result=mysqli_query($conn,$query) or die(mysql_error());
    $rows=mysqli_fetch_assoc($result) or die(mysql_error());
    if(count($rows)==0)
        print("<h3>You have not put anything on sale</h3>");

?>
