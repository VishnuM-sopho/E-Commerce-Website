<html>
<head><link href="../public_html/css/style.css" rel="stylesheet"/></head>
<body>
<a href="../models/login.php">Sell Item</a>
</body>
</html>
<?php
require("../controllers/config.php");
$query="Select * from store";
    $result=mysqli_query($conn,$query);
    if(!$result)
    print(mysqli_error($conn));
    $res=mysqli_query($conn,$query);
    $rows=mysqli_fetch_assoc($res);
    if(count($rows)==0)
        print("<h3>Store is Empty.Please comeback Later.</h3><br>");
    else
    {
    print("<h2>Items on Sale</h2>");
echo("<table id=\"store\">");
echo("<tr>");
echo("<th>Image</th>");
echo("<th>Title</th>");
echo("<th>Price</th>");
echo("<th>College</th>");
echo("<th>Category</th>");
echo("<th>Date</th>");
echo("<th>Contact Seller</th>");
echo("</tr>");
while($rows=mysqli_fetch_assoc($result))
 {   
    $id=$rows["seller_id"];
	print("<tr>");
	$image="<img src=\"".$rows["image"]."\">";
    print("<td>".$image."</td>");
    print("<td>" . $rows["title"] . "</td>");
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
    print("<td>" . $rows["price"] . "</td>");
    print("<td>" . $r["college_name"] . "</td>");                                            
    print("<td>" . $rr["category"] . "</td>");
    print("<td>".$rows["date"]."</td>");
    print("<td><a href=\"/public_html/seller.php?id="."$id"."&title=".$rows["title"]."\">"."Contact Seller"."</a></td>");
    print("</tr>");
}

echo("</table>");     
    }




?>
