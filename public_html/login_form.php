<?php require("../views/title.php");
    require("../controllers/config.php"); 
    if(isset($_SESSION["id"])) 
        header('Location: ../public_html/display.php?id='.$_SESSION["id"]."&change=0");
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>    
        <link rel=stylesheet type="text/css" href="/css/style.css">
		<style>
		table, th, td {
			border: 1px solid cyan;
		}
		
		.upload-img {  
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

.Brand-image {
    padding: 5px;
    width: 80px;
    position: relative;
    top: -12px;
}
.form-style-8{
    font-family: 'Open Sans Condensed', arial, sans;
    width: 500px;
    padding: 30px;
    background: #FFFFFF;
    margin: 50px auto;
      background-color: #fff;
    background-color: rgba(255,255,255,0.8);
   
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
    -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
    -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}
.form-style-8 h2{
    background: #4D4D4D;
    text-transform: uppercase;
    font-family: 'Open Sans Condensed', sans-serif;
    color: #d4f442;
    font-size: 18px;
    font-weight: 100;
    padding: 20px;
    margin: -30px -30px 30px -30px;
}
.form-style-8 input[type="text"],
.form-style-8 input[type="date"],
.form-style-8 input[type="datetime"],
.form-style-8 input[type="email"],
.form-style-8 input[type="number"],
.form-style-8 input[type="search"],
.form-style-8 input[type="time"],
.form-style-8 input[type="url"],
.form-style-8 input[type="password"],
.form-style-8 textarea,
.form-style-8 select 
{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    outline: none;
    display: block;
    width: 100%;
    padding: 7px;
    border: none;
    border-bottom: 1px solid #ddd;
    background: transparent;
    margin-bottom: 10px;
    font: 16px Arial, Helvetica, sans-serif;
    height: 45px;
}
.form-style-8 textarea{
    resize:none;
    overflow: hidden;
}
.form-style-8 input[type="button"], 
.form-style-8 button[type="submit"],a.button{
    -moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
    -webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
    box-shadow: inset 0px 1px 0px 0px #45D6D6;
    background-color: #2CBBBB;
    border: 1px solid #27A0A0;
    display: inline-block;
    cursor: pointer;
    color: #FFFFFF;
    font-family: 'Open Sans Condensed', sans-serif;
    font-size: 14px;
    padding: 8px 25px;
    text-decoration: none;
    text-transform: uppercase;
}
.form-style-8 input[type="button"]:hover, 
.form-style-8 button[type="submit"]:hover,a.button {
    background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
    background-color:#34CACA;
}

a.button{
    margin-left:50px;
}







/*css for the dropdown*/

select#soflow, select#soflow-color {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 10px;
   -webkit-padding-start: 992px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: inherit;
   margin: 2px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 300px;
}





table, th, td {
			border: 1px solid cyan;
		}
		
		
		
		
		
		
		
		
		
		</style>
		<script src="js/jquery.js"></script>
    </head>
    <body>
        
<div class ="form-style-8">
   <h2>
   Login Form
   </h2>
<form id="LoginF" method="POST" action="../models/login.php">
     <input type="text" placeholder="E-mail address"name="email" onblur="vE(this)"><br>
    <input type="password" placeholder="Password "name="password"><br>
	<span id='msg'></span>
</form>
<button form="LoginF" type="submit" name="submit">Log In</button>
<span>or <a href="register_form.php">Register</a></span>
<a href="../public_html/store.php" class="button">Go to Store</a>
</div>
<script type='text/javascript'>
	$("input[name=email]").focus();
</script>

          <?php require("../views/footer.php");?>    
    </body>
<script src='js/functions.js'></script></html>
