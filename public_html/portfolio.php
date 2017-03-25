<?php
 require("../controllers/config.php"); 
 render
 $sid=$_GET['id'];
    $query="Select * from store where seller_id = \"$sid\" ";
    $result=mysqli_query($conn,$query);
    if(!$result)
    print(mysqli_error($conn));
    $rows=mysqli_fetch_assoc($result);
    if(count($rows)==0)
        print("<h3>You have not put anything on sale</h3><br>");

    
    
    
    
    
   

?>
