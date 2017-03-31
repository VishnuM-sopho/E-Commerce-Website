
<?php  require("../controllers/config.php");
$user_name=$_GET["name"];
require("../views/header.php"); ?>


<style>
    
    body
{
  background-size:cover;
}
button {
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
}
#container
{
  position:absolute;
  background:#fff;
  height:380px;
  width:350px;
  top:60%;
  left:50%;
  bottom:30%;
  margin-left:-150px;
 
  box-shadow: 0px 30px 150px;
  -webkit-box-shadow: 0px 30px 150px;
  -moz-box-shadow: 0px 30px 150px;
  
  border-radius:15px;
  -webkit-border-radius:15px;
  -moz-border-radius:15px;
}
#header
{
  background-color:#5175C0;
  font-family: 'Francois One', sans-serif;
  height:75px;
  width:350px;
  position:absolute;
  top:0;
  color:white;
  margin-top:-2px;
  
  border-radius: 15px 15px 0px 0px;
  -webkit-border-radius: 15px 15px 0px 0px;
  -moz-border-radius: 15px 15px 0px 0px;
}
#footer.incorrect
{
  background-color:#5175C0;
  font-family: 'Francois One', sans-serif;
  height:75px;
  width:350px;
  position:absolute;
  bottom:0;
  color:white;
  margin-bottom:-2px;
  
  border-radius: 0px 0px 15px 15px;
  -webkit-border-radius: 0px 0px 15px 15px;
  -moz-border-radius: 0px 0px 15px 15px;
}
#footer.correct
{
  background-color:#84F075;
  font-family: 'Francois One', sans-serif;
  height:75px;
  width:350px;
  position:absolute;
  bottom:0;
  color:white;
  cursor:pointer;
  margin-bottom:-2px;
  
  border-radius: 0px 0px 15px 15px;
  -webkit-border-radius: 0px 0px 15px 15px;
  -moz-border-radius: 0px 0px 15px 15px;
}
#form
{
  height:100px;
  position:absolute;
  top:40%;
  margin-top:-50px;
  width:75%;
  left:50%;
  margin-left:-37.5%;
}
input
{
  width:90%;
  margin:0;
  border:0;
  border-left:1px solid;
  border-right:1px solid;
  outline:none;
  height:50px;
  font-size:20px;
  padding-left:10px;
}
input#passOne
{
  border-top:1px solid;
  
}input#pass
{
  border-top:1px solid;
  border-radius:15px 15px 0px 0px;
  -webkit-border-radius:15px 15px 0px 0px;
  -moz-border-radius:15px 15px 0px 0px;
}
input#passTwo
{
  border-bottom:1px solid;
  border-top:1px solid;
  
  border-radius:0px 0px 15px 15px;
  -webkit-border-radius:0px 0px 15px 15px;
  -moz-border-radius:0px 0px 15px 15px;
}
    
    h1 { 
    display: block;
    font-size: 2em;
    margin-top: 0.67em;
    margin-bottom: 0.67em;
    margin-left: 0;
    margin-right: 0;
    font-weight: bold;
    color: white;
}
    
</style>

<script>
    
    $(document).ready(function(){
  var passOne = $("#passOne").val();
  var passTwo = $("#passTwo").val();
  
  $("#footerText").html("Fields don't match");
  
  var checkAndChange = function()
  {
    if(passOne.length < 1){
      if($("#footer").hasClass("correct")){
        $("#footer").removeClass("correct").addClass("incorrect");
        $("#footerText").html("They don't match");
      }else{
        $("#footerText").html("They don't match");
      }
    }
    else if($("#footer").hasClass("incorrect"))
    {
      if(passOne == passTwo){
        $("#footer").removeClass("incorrect").addClass("correct");
        $("#footerText").html("Continue");
      }
    }
    else
    {
      if(passOne != passTwo){
        $("#footer").removeClass("correct").addClass("incorrect");
        $("#footerText").html("They don't match");
      } 
    }   
  }
  
  
  
  $("input").keyup(function(){
    var newPassOne = $("#passOne").val();
    var newPassTwo = $("#passTwo").val();
    
    passOne = newPassOne;
    passTwo = newPassTwo;
    
    checkAndChange();
  });
});
    
    
</script>
<form action="../models/password.php" method="post">
   <div id="container">
  
  <div id="header">
    <center><h1>Change Password</h1></center>
  </div> 
  <div id="form">
    
     <input autocomplete="off" autofocus class="form-control" name="old_password" placeholder="Old Password" type="password" id = "pass"/>
          <input class="form-control" name="new_password" placeholder="New Password" type="password"  id="passOne"/>
            <input class="form-control" name="confirm_password" placeholder="Confirm New Password" type="password"  id="passTwo"/>
             </div>
  <div >
    <button id="footer" class="incorrect" type="submit">
              
              <center><h1 id="footerText">  Change Password</h1></center>
            </button>
    
    
    </div>
</div>
</form>
