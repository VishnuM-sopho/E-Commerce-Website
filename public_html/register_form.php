<?php require("../views/title.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>      
        <link rel=stylesheet type="text/css" href="/css/style.css">
		<style>
		table, th, td {
			border: 1px solid cyan;
		}
		</style>
		<script src="/js/jquery.js"></script>
		
    </head>
    <body>
     
     
     <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>



<style type="text/css">
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
     background-color: #fff;
    background-color: rgba(255,255,255,0.8);
    margin: 50px auto;
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
.form-style-8 button[type="submit"]{
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
.form-style-8 button[type="submit"]:hover {
    background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
    background-color:#34CACA;
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
     
     
     <div class="form-style-8">
  <h2>Register</h2>
  <form id="RegisterF" method="POST" action="../models/register.php" onsubmit="return vRF(this)">
    <input type="text" name="name" placeholder="Full Name" />
    <input type="email" name="email" placeholder="Email" />
    <br>
    
    
     <select name='cid' id ="soflow" placeholder="College">
				<option value='0' selected disabled placeholder="College">College</option>
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
			
    <input type="password" name="pwd" placeholder = "Password"><br>
   <input type="password" name="rpwd" onblur="vPM()" placeholder="Retype Password"><br>
   
   <section title="Male">
    
  </section>
   
   
   <input type="radio" name="sex" value="0">M 
   <input type="radio" name="sex" value="1">F<br><br>
<button type="submit" form="RegisterF" name="submit" value="Register">Register</button>
<ul id="msg"></ul>
  </form>
</div>
               <?php require("../views/footer.php");?>    
</body>
<script src='/js/functions.js'>
    
</script>
</html>

