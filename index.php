    <?php require("views/title.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>OLX Clone</title>      
        
		<style>
		table, th, td {
			border: 1px solid cyan;
		}
		
		
div {
  width: 200px;
  margin: 30px;
}

h2 {
  font: 400 40px/1.5 Helvetica, Verdana, sans-serif;
  margin: 0;
  padding: 0;
  
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li {
  font: 200 20px/1.5 Helvetica, Verdana, sans-serif;
  border-bottom: 1px solid #ccc;
}

li:last-child {
  border: none;
}

li a {
  text-decoration: none;
  color: #000;

  -webkit-transition: font-size 0.3s ease, background-color 0.3s ease;
  -moz-transition: font-size 0.3s ease, background-color 0.3s ease;
  -o-transition: font-size 0.3s ease, background-color 0.3s ease;
  -ms-transition: font-size 0.3s ease, background-color 0.3s ease;
  transition: font-size 0.3s ease, background-color 0.3s ease;
  display: block;
  width: 300px;
}

li a:hover {
  font-size: 30px;
  background: #f6f6f6;
}
		</style>
		<script src="/js/jquery.js"></script>
    </head>
    <body>
        <div class="container">

<ul>
	<li><a href="/public_html/login_form.php">Click to Sign In</a></li>
	<li><a href="/public_html/register_form.php">Register</a></a></li>
 <li><a href="/public_html/store.php">Go to store</a></li>
</ul>

     </div>
     <?php require("views/footer.php");?>
    </body>
</html>
