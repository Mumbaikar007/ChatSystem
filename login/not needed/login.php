<!doctype html>  
<html>   
<head>  
<title>Login</title>  
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

	<link rel="stylesheet" type="text/css" href="css/header.css">

	<style type="text/css">
		
		/* enable absolute positioning */
		.inner-addon { 
		    position: relative; 
		}

		/* style icon */
		.inner-addon .glyphicon {
		  position: absolute;
		  padding: 10px;
		  pointer-events: none;
		}

		/* align icon */
		.left-addon .glyphicon  { left:  0px;}
		.right-addon .glyphicon { right: 0px;}

		/* add padding  */
		.left-addon input  { padding-left:  30px; }
		.right-addon input { padding-right: 30px; }
	/*=========CSS CODED================*/
	
	.card {
	    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	    transition: 0.3s;
	    width: 40%;
	}

	.card:hover {
	    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}

	.container {
	    padding: 2px 16px;
	}
	



	</style>

	<script type="text/javascript">
		
/*		$(function() {

		    $('#login-form-link').click(function(e) {
				$("#login-form").delay(100).fadeIn(100);
		 		$("#register-form").fadeOut(100);
				$('#register-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});
			$('#register-form-link').click(function(e) {
				$("#register-form").delay(100).fadeIn(100);
		 		$("#login-form").fadeOut(100);
				$('#login-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});

		});

*/
	</script>


</head>  
<body>  


	<header>
		
		 <nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="#">Experentals</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li><a href="#">Home</a></li>
		        <li class="dropdown">
		          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Page 1-1</a></li>
		            <li><a href="#">Page 1-2</a></li>
		            <li><a href="#">Page 1-3</a></li>
		          </ul>
		        </li>
		        <li><a href="#">Page 2</a></li>
		        <li><a href="#">Page 3</a></li>
		      </ul>
		      
		    </div>
		  </div>
		</nav>

	</header>

<!-- ============== TRYING STARTS ================= -->
<div style="margin-top: 100px;">

	<div class="card" style="padding: 10px 10px 10px 10px;max-width: 500px;margin: auto; min-width: 300px;	">
	

		<ul class="nav nav-tabs nav-justified">
			
			<li class="active"><a data-toggle="tab" href="#LogIn">LogIn</a></li>
			<li><a data-toggle="tab" href="#SignUp">Sign Up</a></li>
			
	  	</ul>
	  	
	  	<hr>

	  	<div class="tab-content">
		
		    <div id="LogIn" class="tab-pane fade in active">
		    	 <form action = "" method = "POST">

				   <div class="form-group">
				     <label >Username:</label>
				     <div class="inner-addon left-addon">
						<i class="glyphicon glyphicon-user"></i>
						<input type="text" class="form-control" placeholder="UserName" name = "user">
					</div>
				   </div>


				   <div class="form-group">
				     <label >Password:</label>
				     <div class="inner-addon left-addon">
						<i class="glyphicon glyphicon-lock"></i>
						<input type="password" class="form-control" placeholder="Password" name = "pass">
					</div>
				   </div>
				   <div class="checkbox" style="text-align: center;">
				     <label><input type="checkbox"> Remember me</label>
				   	 <br><br>
 				   	 <button type="button" class="btn btn-primary btn-lg" name = "submit">Submit</button>
 					</div>
 				</form>   	
		    </div>
	    
	    	<div id="SignUp" class="tab-pane fade">
		      <form>

				   <div class="form-group">
				     <label >Username:</label>
				     <div class="inner-addon left-addon">
						<i class="glyphicon glyphicon-user"></i>
						<input type="text" class="form-control" id="uemail" placeholder="UserName">
					</div>
				   </div>



				   <div class="form-group">
				     <label >Email:</label>
				     <div class="inner-addon left-addon">
						<i class="glyphicon glyphicon-envelope"></i>
						<input type="email" class="form-control" id="email" placeholder="Email">
					</div>
				   </div>

				   


				   <div class="form-group">
				     <label >Password:</label>
				     <div class="inner-addon left-addon">
						<i class="glyphicon glyphicon-lock"></i>
						<input type="password" class="form-control" id="pwd" placeholder="Password">
					</div>
				   </div>


				   <div class="form-group">
				     <label >Confirm Password:</label>
				     <div class="inner-addon left-addon">
						<i class="glyphicon glyphicon-lock"></i>
						<input type="password" class="form-control" id="conpwd" placeholder="Confirm Password">
					</div>
				   </div>

				   <div class="checkbox" style="text-align: center;">
				   	 <button type="button" class="btn btn-primary btn-lg">Submit</button>
 				   </div>
 				</form>
			</div>

		</div>
		<hr>
		
	</div>
	</div>
	<!-- ======================TRYING ENDS==================== -->




     <center><h1><img src="logo.png" width="50%" height="50%" style="border-radius:200px;"><br /><br /></h1></center>  
   <center><p><a href="register.php">Register</a> | <a href="login.php">Login</a></p></center> 
<!--<h3>Login Form</h3> --> 
<center><form action="" method="POST">  
Username: <input type="text" name="user"><br />  
Password: <input type="password" name="pass"><br />   
<input type="submit" value="Login" name="submit"/>  
</form></center>  
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con, 'escrow') or die("cannot select DB");  
  
    $query=mysqli_query($con ,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: member.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>   
