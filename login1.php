


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		
.first{
	width:100%;
	height:100%;
	position: absolute;
	top:0%;
	left:0%;
	background-image: url(lib.jpg);
	background-size: 100% 100%;

}

.second{
	position: absolute;
	top: 30%;
	left: 62%;`
	padding-right: 350px;
	padding-left: 450px;
	padding-top: 160px;
	padding-bottom: 150px;
	background-color:#E1E8EA;
		opacity: 90%;
}
.Text-mail{
	position:absolute;
	top:22%;
	left:7%;
width:370px;
height :40px;
margin:5px;
border-width: 3px;
border-color:#E7E3E3;
border-radius:5px;
}
.Text-pass{
	position:absolute;
	top:40%;
	left:8%;
width:370px;
height :40px;
margin:0px;
border-style: inline;
border-width: 3px;
border-color:#E7E3E3;
border-radius:5px;
}
.login{
	position: absolute;
	top:65%;
	left:8%;
width:375px;
height:50px;
background-color:#2E72EE;
border-radius:5px;
text-align:center;
font-size:20px;
}
.button{
	position: absolute;
	top:-30%;
	left:40%;
}
.third{
	position: absolute;
	top:0%;
	left:40%;
}
.first1{
	position: absolute;
	top: 5%;
	left: 10%;
}

.forget{
 position:absolute;
 top:86%;
 left:25%;
 font-size: 20px;
 border-style: inset;
 border-width: 2px;
 border-top:hidden; 
 border-left:hidden; 
 border-right:hidden; 
 border-color:#E5E2E2; 
}

.new{

	position: absolute;
	top:83.7%;
	left:60%;
	
	
border-radius:5px;
text-align:center;
font-size:25px;
margin-top: 3px;
shape-margin:line;


}
.remember {
	position: absolute;
	top:56%; 
	left:8%;
	font-size: 20px;

}
.vertical{
	position: absolute;
	top: 30%;
	left: 50%;
	border-right: 3px solid #2E72EE;
	height: 350px;
	float: left;
}
.first1{
	position: absolute;
	top: 30%;
	left: 20%;
	margin-right: 9px;
	margin-right-color:black; 
	
}
.error{
	position: absolute;
	top: 75%;
	left: 10%;
}
</style>
</head>
<body>
	<div class="first">
		<h1 class="first1">
    <img src="iiti3.png">
		</h1>
		<div class="vertical">
			
		</div>n
				  <div class="second">
		  	<h1 class="third">Login</h1>
		  	<form action="login.php" method="POST">
		  	<input type="email"  class="Text-mail"   name="email" placeholder="email id" required="email"><br>
		  	<i class="fa fa-key"></i>
 <input type="password" name="password" ; class="Text-pass"; placeholder="Password" required="password" /><br> 
<label class="remember">
	 <input type="checkbox" name="remember"> Remember me
</label>
 <a href="trans.php">
 <button text="login"; class="login"><h4  class=" button" style="color:white">Log in</h4></button><br>
 </a>
 </form>
 <p class="error" style="color:red">
 	<?php
        include('login.php');  
       echo "$error";
        ?>  
 </p>
         	<a  class="forget"; style="color:black"; href="#">Forget password ?<br>

  </a>
<a href="regester1.php"  class="new" style="color:blue">sign up 
      
</a>
		  </div>
           
  	</div>
</body>
</html>

