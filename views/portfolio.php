

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
echo("<table id=\"store\">");
echo("<tr>");
echo("<th>Image</th>");
echo("<th>Title</th>");
echo("<th>Price</th>");
echo("<th>College</th>");
echo("<th>Category</th>");
echo("<th>Date</th>");
echo("</tr>");
$id=$_SESSION["id"];
$query="SELECT * from store where seller_id=$id";
$result=mysqli_query($conn, $query);
while($rows=mysqli_fetch_assoc($result))
 {   
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
    print("</tr>");
}


echo("</table>");     
    }

?>
