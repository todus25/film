<!DOCTYPE html>
<html>

<head>
     <title>log in page</title>
	 <script src="jquery.min.js"></script>
	 <style>
	 *{
			     box-sizing:border-box;
				 }
	 body{overflow:hidden;
	      position:relative;
		 background-color:rgba(192,192,192,0.5); }
		 
		 
		  div{height:7cm;
		      width:12cm;
			  position:absolute;
			  background:white;
			  margin-left:11.5cm;
			  padding-left:10px;
			  color:rgba(0,0,255,0.7);
			  font-size:.45cm;
			  border-radius:8px;
			  box-shadow:20px 20px 20px 20px grey;
              animation:toptop 1.25s 1;
			  animation-timing-function:ease-out;
              animation-fill-mode: forwards; }
			  
			  button:hover{background:purple;
			               color:white;}
			  
			  input{width:80%;
			        height:1cm;
			        margin-right:5px;
			        margin-top:20px;
			        border:1px solid pink;
			        font-size:.4cm;
			        color:purple;
					padding-left:10px;}
			  
			  input:hover{border:1px solid blue;}
			  
			  button{height:1.2cm;
			          width:2.4cm;
					  background:yellow;
					  border:0px;
					  margin-left:72px;
					  margin-top:20px;
					  font-size:.5cm;
					  color:grey;
					  border-radius:6px;}
					  
			  #fname{margin-left:5px;}
			  
			  #a{margin-left:169px;
			    }
				@keyframes toptop{from{top:0px;opacity:0;}
				                  to{top:3cm;opacity:2;}}
	 </style>
</head> 
<body>

<div>

        <form id="pp">

              UserName<input type="text" id="fnama" name="name"><br>
              PassWord<input type="text" id="fname" name="email"><br>
	            </form>
	 
	 <button type="submit" id="p">SignUp</button>
	 <button type="submit" id="a">LogIn</button>
	 <p action="welcome.php" method="get"id="xx"></p>
	 <?php
	$_GET["name"];
	 if(!($_GET["name"])){$_GET["name"]="0";}
	 if($_GET["name"]=="1"){echo"wrong password and username";  }
	 else{echo ".";}
	 
                              ?>
</div>




<script src="login.js"></script>

</body>
</html>
