<?php  
    if(isset($_POST["submit"])){  
        if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
            $user=$_POST['user'];  
            $pass=$_POST['pass'];  
            $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
            mysqli_select_db($con, 'escrow') or die("cannot select DB");  
          
            $query=mysqli_query($con ,"SELECT * FROM login WHERE username='".$user."'");  
            $numrows=mysqli_num_rows($query);  
            if($numrows==0)  
            {  
            
            $array = array();
            $string = serialize($array);
            $sql2="INSERT INTO chatTo(name, other) VALUES ('$user','$string')";
            $result2 = mysqli_query($con ,$sql2); 
            if ($result2){
                echo "done";
            }
            else{
                echo "ABE yaar";
            }

            $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";  
            
            
            $result=mysqli_query($con ,$sql);  
                if($result){  
            echo "Account Successfully Created";
            header("Location: login.html");    
            } else {  
            echo "Failure!";  
            }  
          
            } else {  
            echo "That username already exists! Please try again with another.";  
            }  
          
        } else {  
            echo "All fields are required!";  
        }  
    }  
?>