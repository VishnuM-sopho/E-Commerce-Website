<?php require("../views/title.php"); ?>
<?php
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
		</style>
		<script src="js/jquery.js"></script>
		<script src='js/functions.js'></script>
    </head>
    <body>
        <div class="container">
<form id="postF" method="POST" action="../models/sell.php?id=<?php echo $_SESSION['id'];?>" enctype="multipart/form-data" onsubmit="return vPF(this)">
    <select name="category" onchange="chk(this.value)">
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
    <input type="hidden" name="image" value="0">
    <div class="upload-div">Upload Image: <input class="upload-img" type="file" name="image"><br></div>
    <button type="submit" form="postF">Submit</button>
</form>
<ul id="msg">
    
</ul>
     </div>
    </body>

</html>
