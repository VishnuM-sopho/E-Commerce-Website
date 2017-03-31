<?php 
require("../controllers/config.php");
render("null.php");


?>
<html>
<head><link href="../public_html/css/style.css" rel="stylesheet"/></head>
<body>
            <style>
         @import url(http://fonts.googleapis.com/css?family=Raleway);

nav {
   font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
	margin-top: 40px;
  padding: 20px;
  
  text-align: center;
  box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
}
#nav-1 {
  background: #5175C0;
  opacity : 0.85;
}

.link-1 {
  transition: 0.3s ease;
  background: #5175C0;
  color: #ffffff;
  font-size: 24px;
  text-decoration: none;
  border-top: 4px solid #5175C0;
  border-bottom: 4px solid #5175C0;
  padding: 16px 0;
  margin: 0 20px;
}
.link-1:hover {
  border-top: 4px solid #ffffff;
  border-bottom: 4px solid #ffffff;
  padding: 6px 0; 
}

        </style>
        
     
</body>
</html>
<?php
print_r($_POST);
if(isset($_POST["cid"]) && isset($_GET["id"]))
 {  
 echo("<a href=\"../public_html/store.php\">Return To Main Store</a>");
    $id=$_SESSION["id"];
 extract($_POST);
    if($cid!=1)
    $query="select * from store where seller_id=$id and college_id=$cid";
    else if($cid==1)
        $query="select * from store where seller_id=$id";
  }
else if(isset($_GET["id"]) && !isset($_POST["cid"]))
{
    echo("<a href=\"../public_html/store.php\">Return To Main Store</a>");
    $id=$_GET["id"];
 $query="select * from store where seller_id=$id";
}
else if(!isset($_GET["id"]) && isset($_POST["cid"]))
{extract($_POST);
    if($cid!=1)
    $query="select * from store where college_id=$cid";
    else if($cid==1)
        $query="select * from store";
}
else
$query="Select * from store";

if(!isset($_POST["cid"]))
    print("<h3>Showing Results for All</h3>");
    else{
$id=$_POST['cid'];
$query2="Select college_name from colleges where college_id=$id";
$r=mysqli_query($conn,$query2);
$res=mysqli_fetch_assoc($r);
$res=$res["college_name"];
print("<h1>Showing Results for $res</h1>");
}
    $result=mysqli_query($conn,$query);
    if(!$result)
    print(mysqli_error($conn));
    $res=mysqli_query($conn,$query);
    $rows=mysqli_fetch_assoc($res);
 
    
?>
<?php
 if(!isset($_GET["id"]))
echo("<form id=\"search\" method=\"POST\" action=\"../public_html/store.php\">");
else
echo("<form id=\"search\" method=\"POST\" action=\"../public_html/store.php?id=\"".$_GET["id"].">");
?>
<select name='cid' id="s1">
				<option value='0' disabled placeholder="College">College</option>
<option value=1>All Colleges</option>
<option value=2>MNIT, JAIPUR</option>
<option value=3>NIT JALANDHAR</option>
<option value=4>IIT BOMBAY</option>
<option value=5>IIT DELHI</option>
<option value=6>IIT KHARAGPUR</option>
<option value=7>IIT KANPUR</option>
<option value=8>IIT MADRAS</option>
<option value=9>IIT GUWAHATI</option>
<option value=10>IIT ROORKEE</option>
<option value=11>IIT (BHU) VARANASI</option>
			</select><br>
<select name="catid" id="s2">
        <option value="0" selected>All Categories</option>
        <option value="1">Books</option>
        <option value="2">Clothing</option>
        <option value="3">Electronics</option>
        <option value="4">Furniture</option>
        <option value="5">Sports</option>
        <option value="6">Vehicle</option>
        <option value="7">Others</option>
    </select><br>
			<button type="submit" id="b1" form="search" name="submit" value="Register">Submit</button>
</form>

<?php
    if(count($rows)==0)
        print("<h3>Store is Empty.Please comeback Later.</h3><br>");
    else
    {$l=mysqli_num_rows($res);
    print("<h2>".$l." Items on Sale</h2>");
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
