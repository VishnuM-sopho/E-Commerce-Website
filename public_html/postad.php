<?php 
    require("../controllers/config.php"); 
render("/null.php"); ?>
<?php
if(!isset($_GET["id"]))
    redirect("/login_form.php");
$_SESSION['id']=$_GET['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PostAd</title>      
        <link rel=stylesheet type="text/css" href="/css/styles.css">
		<style>
		table, th, td {
			border: 1px solid cyan;
		}
		
/*--start-wrap--*/
.content {
	width:80%;
	margin:0 auto;
}
/*--strat-login-form--*/
	
.Regisration {
	width: 34%;
	text-align:center;
	margin: 0 auto;
	background:#20252D;
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;
	-o-border-radius:7px;
	padding-bottom: 3px;
}
.Regisration-head {
      padding-top: 0px;
	 border-top-left-radius:7px;
	-webkit-border-top-left-radius:7px;
	-moz-border-top-left-radius:7px;
	-o-border-top-left-radius:7px;
	border-top-right-radius:7px;
	-webkit-border-top-right-radius:7px;
	-moz-border-top-right-radius:7px;
	-o-border-top-right-radius:7px;
	text-align: center;
	border: 1px solid rgba(0, 0, 0, 0.37);
	box-shadow: 0px 4px 10px 0px rgba(1, 3, 12, 0.33);
	-webkit-box-shadow: 0px 4px 10px 0px rgba(1, 3, 12, 0.33);
	-o-	box-shadow: 0px 4px 10px 0px rgba(1, 3, 12, 0.33);
	-moz-box-shadow: 0px 4px 10px 0px rgba(1, 3, 12, 0.33);
	position: relative;
}
.Regisration-head span{
	background: url(../images/user-icon.png) no-repeat -5px -6px;
	position: absolute;
	top: 28%;
	left: 25%;
	height: 40px;
	width: 40px;
}
.Regisration-head h2{
	color: #0C0D10;
	font-size: 33px;
	font-weight: 700;
	margin-left:20px;
	font-family: 'Raleway', sans-serif;
}
.Regisration form {
	text-align: center;
	margin:5% 0%;
	position:relative;
		
}
.Regisration form input[type="text"],.Regisration form textarea[type="text"],.Regisration form input[type="password"],select{
	font-size: 15px;
	outline: none;
	font-weight: 600;
	color:#8D8E8F;
	padding: 12px 12px;
	width:76%;
	border-top:1px solid #090B0D;
	border-right:2px solid #424549;
	border-bottom:2px solid #424549;
	border-left:1px solid #090B0D;
	margin: 10px 1em;
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;
	-o-border-radius:7px;
	background: #13161B;
	box-shadow: inset 0px 3px 0px 0px rgba(5, 5, 5, 0.15);
	-webkit-box-shadow: inset 0px 3px 0px 0px rgba(5, 5, 5, 0.15);
	-o-box-shadow: inset 0px 3px 0px 0px rgba(5, 5, 5, 0.15);
	-moz-box-shadow: inset 0px 3px 0px 0px rgba(5, 5, 5, 0.15);
	font-family: 'Raleway', sans-serif;

}
.ticker{
	position:relative;
}
.Regisration form input[type="text"]:hover,.Regisration form textarea[type="text"]:hover,.Regisration form input[type="password"]:hover,select#soflow:hover, select#soflow-color:hover{
	box-shadow: 0 0 1em #56AF00;
	-webkit-box-shadow: 0 0 1em #56AF00;
	-o-box-shadow: 0 0 1em #56AF00;
	-moz-box-shadow: 0 0 1em #56AF00;
}

/*************************/
.submit {
	text-align: center;
	margin: 0px 0;
}
.submit input[type="submit"]{
	color: #203500;
	cursor: pointer;
	border: none;
	font-weight: 900;
	outline: none;
	font-family: 'Raleway', sans-serif;
	padding: 14px 0px;
	width: 25%;
	font-size: 18px;
	transition: border-color 0.3s;
	-o-transition: border-color 0.3s;
	-ms-transition: border-color 0.3s;
	-moz-transition: border-color 0.3s;
	-webkit-transition: border-color 0.3s;
	border-radius: 4px;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    -moz-border-radius: 4px;
	background: rgb(113,209,26);  /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(113,209,26,1) 0%,rgba(96,193,8,1) 3%,rgba(101,199,7,1) 8%,rgba(87,177,0,1) 62%,rgba(75,136,0,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(113,209,26,1) 0%,rgba(96,193,8,1) 3%,rgba(101,199,7,1) 8%,rgba(87,177,0,1) 62%,rgba(75,136,0,1) 100%); 
}
  




/*css for the dropdown*/

select#soflow, select#soflow-color {
   
  font-size: 15px;
	outline: none;
	font-weight: 600;
	color:#8D8E8F;
	padding: 12px 12px;
	width:82%;
	border-top:1px solid #090B0D;
	border-right:2px solid #424549;
	border-bottom:2px solid #424549;
	border-left:1px solid #090B0D;
	margin: 10px 1em;
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;
	-o-border-radius:7px;
	background: #13161B;
	box-shadow: inset 0px 3px 0px 0px rgba(5, 5, 5, 0.15);
	-webkit-box-shadow: inset 0px 3px 0px 0px rgba(5, 5, 5, 0.15);
	-o-box-shadow: inset 0px 3px 0px 0px rgba(5, 5, 5, 0.15);
	-moz-box-shadow: inset 0px 3px 0px 0px rgba(5, 5, 5, 0.15);
	font-family: 'Raleway', sans-serif;
}


    width: 80px;
    display: inline !important;
}
.upload-div { 
    background-color: orange;
    width: 190px;
    font-weight: normal;
    color: blue;
    padding: 5px;
    border: 1px solid #aaa;
    border-radius: 5px;
}
#container2{
   padding-top: 70px;
  
}
		</style>
		<script src="js/jquery.js"></script>
		<script src='js/functions.js'></script>
    </head>
    <body>
        
        
        
        
        
        <div class="wrap" id="container2">
    <div class="Regisration">
        <div class="Regisration-head">
            <h2><span></span>Add Product</h2>
        </div>
        <form id="postF" method="POST" action="../models/sell.php?id=<?php echo $_SESSION['id'];?>" enctype="multipart/form-data" onsubmit="return vPF(this)">
            <select placeholder="Select Categoryy" name="category" id="soflow" onchange="chk(this.value)">
        <option value="0" selected disabled>Select Category</option>
        <option value="1">Books</option>
        <option value="2">Clothing</option>
        <option value="3">Electronics</option>
        <option value="4">Furniture</option>
        <option value="5">Sports</option>
        <option value="6">Vehicle</option>
        <option value="7">Others</option>
    </select><br>
            <input type="text" name="title" placeholder="Item Title (Min. length 4 char)"><br>
            <textarea type="text" name="desc" placeholder="Item description (Max. length 200 char)"></textarea><br>
            <textarea type="text" name="contact" placeholder="Contact info (Min. length 4 char)"></textarea><br>
            <input type="text" name="price" placeholder="Your Price (In Rs.)"><br>
            <div class="fileUpload btn btn-primary">
                <span>Upload</span>
                <input type="file" class="upload" name="image" />
            </div><br><br>


            <div class="submit">
                <input type="submit" form="postF">
            </div>



    </div>
    <ul id="msg">

    </ul>
    </form>
</div>

        
        
        
        
        
    </body>

</html>
