<?php

	require ('includes/core.inc.php');
	//echo "index.php";

	if(isset($_POST['send'])) {
		if (send_msg( $_POST['sender'], $_POST['message'] ) )
		{
			echo 'Message Sent';

		}
		else{
			echo 'Message failed';
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Chat</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

	<!-- <meta http-equiv="Refresh" content="5">	 -->

	<!-- <script type="text/javascript">
		var auto_refresh = setInterval((function () {
		    $("#messagesDivision").load("includes/core.inc.php"); //Load the content into the div
		}), 1000);


	</script> -->


</head>
<body>
		
		

		
		  <div class="panel panel-info" style=" position: fixed;bottom: 2px; right: 5px; width: 300px;">
		    <div class="panel-heading">Chat</div>
		    <div id = "sdown" class="panel-body" style="height: 200px;overflow: auto;scroll: ">
		    	
		    	<?php

					$messages =  get_msg();

				/*	echo gettype($messages);*/

					foreach($messages as $message){
						echo '<strong>'.$message['sender'].': <br></strong>';
						echo $message['message'].'<br><br>';

					}
					
				?>


		    </div>



		    <div class="panel-footer">

		    	<form action="index.php" method = "post" > 
				
				<center>
					<div class = "" style=""><label><input type="text" name="sender" placeholder="Name"></label></div>
					<div class = ""><label><input type="text" name="message" placeholder="Enter Message" autofocus></label></div>
				
				<input type="submit" name="send" value="Send Message">
				</center>
			
			</form>

		    </div>
		  </div>
		</div>

		

		<br>

		

	

</body>
</html>
