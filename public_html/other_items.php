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
if(isset($_POST["cid"]))
    extract($_POST);

if(isset($_GET["id"]) && isset($_POST["cid"]))
{  
    $id=$_GET["id"];
    $query="select * from store where seller_id=$id";
    if($cid==0 && $catid==0)
      {  $query="select * from store where seller_id=$id";
        $res="All Colleges";
        $res2="All Categories";
        }
    else if($cid!=0 && $catid!=0)
        $query=$query." and college_id=$cid and category_id=$catid";
    else if($cid!=0)
       { $query=$query." and college_id=$cid";$res2="All Categories";}
    else if($catid!=0)
       { $query=$query." and category_id=$catid";$res="All Colleges";}
    if(!mysqli_query($conn,$query))
        print(mysqli_error($conn));
}
else if(isset($_GET["id"]) && !isset($_POST["cid"]))
{
    $id=$_GET["id"];
    $query="select * from store where seller_id=$id";
    $res="All Colleges";
    $res2="All Categories";
    if(!mysqli_query($conn,$query))
        print(mysqli_error($conn));
}
else if(!isset($_GET["id"]) && isset($_POST["cid"]))
{
    $query="select * from store";
    if($cid==0 && $catid==0)
       { $query="select * from store";$res="All Colleges";$res2="All Categories";}
    else if($cid!=0 && $catid!=0)
        $query=$query." where college_id=$cid and category_id=$catid";
    else if($cid!=0)
       { $query=$query." where college_id=$cid";$res2="All Categories";}
    else if($catid!=0)
       { $query=$query." where category_id=$catid";$res="All Colleges";}
    if(!mysqli_query($conn,$query))
        print(mysqli_error($conn));
}
else if(!isset($_GET["id"]) && !isset($_POST["cid"]))
{
    $query="Select * from store";
    $res="All Colleges";
    $res2="All Categories";
}
if(isset($_POST["cid"]))
{
    if($_POST["cid"]!=0){
$id=$_POST['cid'];
$query2="Select college_name from colleges where college_id=$id";
$r=mysqli_query($conn,$query2);
$res=mysqli_fetch_assoc($r);
$res=$res["college_name"];
}
else $res="All Colleges";
if($_POST["catid"]!=0){
$query3="select category from categories where category_id=$catid";
$r=mysqli_query($conn,$query3);
$res2=mysqli_fetch_assoc($r);
$res2=$res2["category"];}
else $res2="All Categories";
}
print("<h4>Showing Results for $res and $res2</h4>");

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
<option value=0 selected>All Colleges</option>
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
        <option value=0 selected>All Categories</option>
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
        print("<h3>Nothing is present here for your Purchase.Please comeback Later.</h3><br>");
    else
    {$l=mysqli_num_rows($res);
    print("<h2>".$l." Items on Sale Available for You</h2>");
    echo("<div id=\"main\"><section id=\"content\"><div id=\"left\"><ul>");
while($rows=mysqli_fetch_assoc($result))
 {   
    $id=$rows["seller_id"];
	echo("<li>");
	echo("<div class=\"img\">");
	$image="<img alt=\"\" src=\"".$rows["image"]."\">";
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
    echo("<div class=\"actions\">");
    echo("<a href=\"/public_html/seller.php?id="."$id"."&title=".$rows["title"]."\">"."Contact Seller"."</a>");
    echo("</div></div></li>");
}
        echo("</ul></div></section></div>");
    }


        require("../views/footer.php");    

?>
