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
		    $_SESSION['sess_user']= $user;
		    $_SESSION['talkto'] =  $user;
		  
		    /* Redirect browser */  
		    header('Location: ../ChatSystem/thechat.php?login='.$user);  
		    }  
		    } else {  
		    echo "Invalid username or password!";  
		    }  
		  
		} else {  
		    echo "All fields are required!";  
		}  
	}  
?>
