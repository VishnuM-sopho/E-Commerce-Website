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

.field {
  display:flex;
  position:realtive;
  margin:5em auto;
  width:80%;
}

.field>input[type=text],
.field>button {
  display:block;
  font:1.2em Myriad Pro;
}

.field>input[type=text] {
  flex:1;
  padding:0.6em;
  border:0.2em ;
}

.field>button {
  padding:0.6em 0.8em;
  background-color:#2ecc71;
  color:white;
  border:none;
}
.field>button:hover {
	cursor:pointer;
}

        </style>
        
  <script>
$("#search").keyup(function () {
    var filter = jQuery(this).val();
    jQuery("section div ul li").each(function () {
        if (jQuery(this).text().search(new RegExp(filter, "i")) < 0) {
            jQuery(this).hide();
        } else {
            jQuery(this).show()
        }
    });
});</script>   
</body>
</html>
<?php
$query="Select * from store";
    $res="All Colleges";
    $res2="All Categories";
    $result=mysqli_query($conn,$query);
    if(!$result)
    print(mysqli_error($conn));
    $res=mysqli_query($conn,$query);
    $rows=mysqli_fetch_assoc($res);
 
    
?>

<?php
    if(count($rows)==0)
        print("<h3>Nothing is present here for your Purchase.Please comeback Later.</h3><br>");
    else
    {$l=mysqli_num_rows($res);
    print("<h2>".$l." Items on Sale Available for You</h2>");
    print("<div class=\"field\" id=\"searchform\">
		      <input type=\"text\" id=\"search\" placeholder=\"Search anything ?\" />
		      <button type=\"button\" id=\"search\">Find</button>
  	  </div>");
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
<script>
$("#search").keyup(function () {
    var filter = jQuery(this).val();
    jQuery("section div ul li").each(function () {
        if (jQuery(this).text().search(new RegExp(filter, "i")) < 0) {
            jQuery(this).hide();
        } else {
            jQuery(this).show()
        }
    });
});</script>   
