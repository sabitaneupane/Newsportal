<html>
<head>
	<style>
		body{
		
			background-color: #B71C1C;
		}
		#login{
			margin-top:150px;
		}
		#login_container{
			width:25%;
			margin:auto;
			background-color:#EEEEEE;
			border-radius:10px;
		}
		#login_container h1{
			text-align: center;
		}
		#login_container form{
			text-align: center;
			padding:20px;
		}
		#login_button{
			background:#B71C1C;
			border-color:#B71C1C;
			padding:10px 40px;
			color:white;
		}
	</style>
</head>

<body>
<div id="login" >
				<div   id="login_container" >
					<h1> Login </h1>
					<form  method="post" id="loginform" >
							
						<div id="postpage_content" > 
							<label> Username: </label> 
							<input type="text" name=""  >
						</div><br/>

						<div id="postpage_content" > 
								<label> Password: </label> 
								<input type="password" name=""  >
							</div><br/>

						<input type="submit" value="Log in" onclick="loginProcess()"  id="login_button">
					</form>
				</div>

			</div>

 	
</body>
</html>