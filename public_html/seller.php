<?php require("../controllers/config.php"); ?>
<?php
require("../views/header.php");
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
echo("<table id=\"store\">");
echo("<tr>");
echo("<th>Image</th>");
echo("<th>Title</th>");
echo("<th>Description</th>");
echo("<th>Price</th>");
echo("<th>Date</th>");
echo("<th>Contact</th>");
echo("</tr>");
$id=$rows["seller_id"];
	print("<tr>");
	$image="<img src=\"".$rows["image"]."\">";
    print("<td>".$image."</td>");
    print("<td>" . $rows["title"] . "</td>");
    $query="select description,contact from item_desc where title='$title'";
    $res=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($res);
    $desc=$row["description"];
    $contact=$row["contact"];






    print("<td>" . $desc . "</td>");
    print("<td>" . $rows["price"] . "</td>");                                            
    print("<td>" . $rows["date"] . "</td>");
    print("<td>".$contact."</td>");
    print("</tr>");
    echo("</table>");     
?>
