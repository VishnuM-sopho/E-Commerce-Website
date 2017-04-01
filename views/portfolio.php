
<?php
    if($change)
        print("<h3>Your Password has been changed Successfully.</h3>");
    $query="Select * from store where seller_id = \"$id\" ";
    $result=mysqli_query($conn,$query);
    if(!$result)
    print(mysqli_error($conn));
    $rows=mysqli_fetch_assoc($result);
    if(count($rows)==0)
        print("<h3>You have not put anything on sale</h3><br>");
    else
    {
    print("<h2>Your items on Sale</h2>");

$id=$_SESSION["id"];
$query="SELECT * from store where seller_id=$id";
$result=mysqli_query($conn, $query);
echo("<div id=\"main\"><section id=\"content\"><div id=\"left\"><ul>");
while($rows=mysqli_fetch_assoc($result))
 {   
	echo("<li>");
	echo("<div class=\"img\">");
	$image="<img src=\"".$rows["image"]."\">";
    echo($image."</div>");
    echo("<div class=\"info\"><div align=\"center\">");
    echo("<a class=\"title\" href=\"#\">");
    echo($rows["title"]."</a></div>");
    $title=$rows["title"];
    $query="select college_id,category_id from store where title='$title' and seller_id=$id";
    $res=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($res);
    $college_id=$row["college_id"];
    $category_id=$row["category_id"];
    $query="select college_name from colleges where college_id=$college_id";
    $res=mysqli_query($conn,$query);
    $r=mysqli_fetch_assoc($res);
    $query="select category from categories where category_id=$category_id";
    $res=mysqli_query($conn,$query);
    $rr=mysqli_fetch_assoc($res);
    echo("<div class=\"price\">");
    echo("<span class=\"st\">College:</span><strong> ".$r["college_name"] . "</strong><br>");                                           
    echo("<span class=\"st\">Category:</span><strong> ".$rr["category"] . "</strong><br>");
    echo("<span class=\"st\">Date of Posting:</span><strong> ".$rows["date"]."</strong><br>");
    echo("<span class=\"st\">Price:</span><strong>Rs. ". $rows["price"] . "</strong><br>");
    echo("</div>");
    echo("</div></li>");
}

    echo("</ul></div></section></div>");

    }
          require("footer.php");    
?>
