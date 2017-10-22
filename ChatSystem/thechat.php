<?php
  
  session_start();

  require ('includes/core.inc.php');
  //echo "index.php";


  //If Chatting for first time
  /*if (!isset($_SESSION['sess_user']))
    header("Location: ../login/login.html");  
  */

  if (isset($_GET['talkto'])){
    if ( $_GET['talkto'] != $_GET['login'] ){
      //echo $_SESSION['talkto'];
    //function addToChatList( ){
        
        $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
        mysqli_select_db($con, 'escrow') or die("cannot select DB");  
        
        $query=mysqli_query($con ,"SELECT other FROM chatTo WHERE name='".$_GET['login']."'"); 
        $query2=mysqli_query($con ,"SELECT other FROM chatTo WHERE name='".$_GET['talkto']."'");
        
        $row =  (mysqli_fetch_assoc($query));
        $row2 =  (mysqli_fetch_assoc($query2));
        
        //string to array
        $array = unserialize($row['other']);
        $array2 = unserialize($row2['other']);

        //echo $array."<br>";
        $neverTalked = 1;
        foreach ($array as $i) {
          echo var_dump($i);

          if ( $i == $_GET['talkto']){  
            echo " - never";
            $neverTalked = 0;

          }
        } 
        //echo $_SESSION['talkto']. " " . $_SESSION['sess_user'] . "<br>";
        if ($neverTalked == 1){

          $array [] = ($_GET['talkto']);
          $array2 [] = ($_GET['login']);
        }

        //array to string
        $array = serialize($array);
        $array2 = serialize($array2);
        
        echo $array2;
        

        $query=mysqli_query($con ,"UPDATE chatTo SET other='".$array."' WHERE name='".$_GET['login']."'");
        $query=mysqli_query($con ,"UPDATE chatTo SET other='".$array2."' WHERE name='".$_GET['talkto']."'");

        /*if ($query){
            echo "done";
        }
        else{
            echo "ABE yaar";
        }*/
    }
  }
    // ends



  
  if(isset($_GET['send'])) {
    //echo "1<br>";
    if (send_msg( $_GET['login'], $_GET['talkto'], $_GET['message'] ) )
    {
      echo 'Message Sent';

    }
    else{
      echo 'Message failed';
    }
  }
?>




<!DOCTYPE html>
<html>
<head>


  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;
	
}

/* Style the tab */
div.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 400px;
    overflow-y: auto;
}

/* Style the buttons inside the tab */
div.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 400px;
    background-color: #fff;
    
}

 /* Chat containers */
.ccontainer {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
}

/* Darker chat container */
.darker {
    border-color: #ccc;
    background-color: #ddd;
}

/* Clear floats */
.ccontainer::after {
    content: "";
    clear: both;
    display: table;
}

/* Style images */
.ccontainer img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

/* Style the right image */
.ccontainer img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}

/* Style time text */
.time-right {
    float: right;
    color: #aaa;
}

/* Style time text */
.time-left {
    float: left;
    color: #999;
} 
</style>
</head>
<body style = "background-image: radial-gradient(circle, #3241a6 0, #202a6b 120%);">

  <!-- ================= HEADER ============== -->

<header>
  
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
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
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

</header>

 <!-- ================ HEADER ENDS =================== -->

<div class="container" style="margin-top: 100px;margin-bottom: 25px;">
  
  <div class="tab">
  
    <!-- default section : welcome to chat --> 
    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Welcome To Chat System</button>

      <?php  

        // connecting to escrow database
        $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
        mysqli_select_db($con, 'escrow') or die("cannot select DB");  
        

        //Querying the list of people this nigga is talking to (from chat to database)
        $query=mysqli_query($con ,"SELECT other FROM chatTo WHERE name='".$_GET['login']."'"); 
        $row =  (mysqli_fetch_assoc($query));
        $array = unserialize($row['other']);



        // displaying list on left side of chatbox
        foreach ($array as $i) {
          echo "<button class= \"tablinks\" onclick= \"openCity(event, '".$i."')\">".$i."</button>";
        }



        // the content of default section : welcome to chat
        echo "
            </div>

            <div id=\"London\" class=\"tabcontent\">
              <h3>Welcome to Chat System</h3>
              <p>Connect to Other renters and lessors.</p>
            </div>
        ";


      // retrieving all messages
      $messages =  get_msg();


      date_default_timezone_set("Asia/Kolkata");

      /*  echo gettype($messages);*/

      // filling the contents of each person list 
      foreach ($array as $i) {
        
        #code...
        
        echo " <div id=\"".$i."\" class=\"tabcontent\"  style = \"position: relative;\">
                
                <h3>".$i."</h3>
                <div style = \"height: 280px; overflow-y: auto;\">
        ";
        

        // showing messages (the chat) between i an nigga
        foreach($messages as $message){

        /*echo var_dump($message['receiver']) . "<br>". var_dump($message['sender'] ) . "<br>" . var_dump($_SESSION['sess_user'] ) . "<br>";*/
        
          {
           
            /*echo '<strong>'.$message['sender'].': <br></strong>';
            echo $message['message'].'<br><br>';
            */

            //echo $message['sender'] == $_SESSION['sess_user'] ; 

            /*echo var_dump($message['sender']) . " " , var_dump($_SESSION['talkto']). " ". var_dump($_SESSION['sess_user']). " <br> ";*/

          

          



            //Show Left
            if ( !strcmp( $message['sender'], $i) && !strcmp( $message['receiver'], $_GET['login']) ){

            echo '
            <div class="ccontainer">
              <img src="../images/him.jpeg" alt="Avatar">
              <p><strong>'.$message['sender'].': <br></strong>
              '.$message['message'].'</p>
              <span class="time-right">'.date("h:i:sa").'</span>
            </div>';
            }
            
            //Show Right
            else if ( !strcmp( $message['sender'], $_GET['login']) && !strcmp( $message['receiver'], $i) ){
            
            echo '
            <div class="ccontainer darker">
              <img src="../images/you.jpeg" alt="Avatar" class="right">
              <p><strong>'.$message['sender'].': <br></strong>
              '.$message['message'].'</p>
              <span class="time-left">'.date("h:i:sa").'</span>
            </div>
            ';

            }
          }
        }

        echo '  </div>
    <div class = "container" style="width:100% ;border: 1px solid #ccc;position: absolute; bottom: 0;margin-left: -12px;">
      <div class="row">
      
        <form action="thechat.php?" method = "GET" > 
          
            <div style="display: none;"><label><input type="text" name="talkto" value = "'.$i.'"></label></div>
            <div style="display: none;"><label><input type="text" name="login" value = "'.$_GET['login'].'"></label></div>
            <div class = "col-lg-9 col-xs-12"><label><input type="text" name="message" placeholder="Enter Message" width = "100%"></label></div>
            <div class="col-lg-3 col-xs-12" style= "text-align: right;"><input type="submit" name="send" value="Send Message"></div>
        
        </form>
    
      </div>
    </div>
   ';        

        echo "</div>";
      }
  ?>

      </div>  
  </div>




<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
