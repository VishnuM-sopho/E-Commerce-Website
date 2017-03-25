

<?php
    $query="Select * from store where seller_id = \"$id\" ";
    $result=mysqli_query($conn,$query);
    if(!$result)
    print(mysqli_error($conn));
    $rows=mysqli_fetch_assoc($result);
    if(count($rows)==0)
        print("<h3>You have not put anything on sale</h3><br>");
    else
    {

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
$id=$_SESSION["id"];
$query="SELECT * from store where seller_id=$id";

$result=mysqli_query($conn, $query);
while($rows=mysqli_fetch_assoc($result))
 {   
	print("<tr>");
    print("<td>".$rows["image"]."</td>");
    print("<td>" . $rows["title"] . "</td>");
    print("<td>" . $rows["price"] . "</td>");
    print("<td>" . $rows["college_id"] . "</td>");                                            
    print("<td>" . $rows["category_id"] . "</td>");
    print("<td>".$rows["date"]."</td>");
    print("<td><a href=\"\">"."Contact Seller"."</a>");
    print("</tr>");
}


echo("</table>");     
    }

?>
