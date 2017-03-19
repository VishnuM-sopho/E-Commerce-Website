<?php
    $query="Select * from store where seller='$email'";
    $result=mysqli_query($conn,$query);
    $rows=mysqli_fetch_assoc($result);
    if(count($rows)==0)
        print("<h3>You have not put anything on sale</h3>");

?>
