<?php require("../controllers/config.php"); ?>
<?php
render("/null.php");
$id=$_GET["id"];
?>
<html>
<head><link href="../public_html/css/style.css" rel="stylesheet"/></head>
<body>
<br><br>
</body>
</html>
<?php
$title=$_GET["title"];
$query="Select * from store where seller_id=$id and title='$title'";
$result=mysqli_query($conn,$query);
    if(!$result)
    print(mysqli_error($conn));
$rows=mysqli_fetch_assoc($result);
echo("<div id=\"main\"><section id=\"content\"><div id=\"left\"><ul>");
echo("<li>");
    $id=$rows["seller_id"];
    echo("<div class=\"img\">");
	$image="<img src=\"".$rows["image"]."\">";
    echo($image."</div>");
    echo("<div class=\"info\"><div align=\"center\">");
    echo("<a class=\"title\" href=\"#\">");
    echo($rows["title"]."</a></div>");
    $query="select description,contact from item_desc where title='$title'";
    $res=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($res);
    $desc=$row["description"];
    $contact=$row["contact"];

    print("<p>" . $desc . "</p>");
    echo("<div class=\"price\">");
    echo("<span class=\"st\">Price:</span><strong>Rs. ". $rows["price"] . "</strong><br>");
    echo("<span class=\"st\">Contact:</span><strong> ". $contact . "</strong><br>");                                           
    echo("</div></li>");
    echo("</ul></div></section></div>");     
            require("../views/footer.php");  
?>
