<?php 



	function get_msg() {

		$db_host = 'localhost';
		$db_user = 'root';
		$db_pass = '';


		$db_name = 'chat';
		$connection = mysqli_connect($db_host, $db_user, $db_pass );

		$query = "SELECT Sender, Receiver, Message FROM `chat`.`chat`"; //ORDER BY Msg_ID DESC

		$run = mysqli_query($connection,$query);

		$messages = array();

		
		/*if (mysqli_num_rows($run) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($run)) {
		        echo "<b>" . $row["Sender"]. ": </b>" . $row["Message"] . "<br/>";
		    }
		} 
		else {
		    echo "0 results";
		}*/

		// look through query
/*		while($row = mysqli_fetch_assoc($run)){

			// add each row returned into an array
			$messages[] = $row;

			// OR just echo the data:
			echo $row['Sender']; // etc
			echo "<br>";
		}
*/
		while ( $row = mysqli_fetch_assoc($run)){
 
			$messages[] = array ( "sender" => $row ['Sender'],
								  "receiver" => $row ['Receiver'],
								  "message"=> $row ['Message']
			);

		}

		return $messages; 

	}

	function send_msg( $sender, $receiver, $message){
		
		$db_host = 'localhost';
		$db_user = 'root';
		$db_pass = '';


		$db_name = 'chat';
		$connection = mysqli_connect($db_host, $db_user, $db_pass );

		if (!empty($sender) && !empty($message)) {

			$sender  = mysqli_real_escape_string($connection, $sender);
			
			$message = mysqli_real_escape_string($connection, $message);

			$query = "INSERT INTO chat.chat(Sender,Receiver, Message) VALUES ( '".$sender."', '".$receiver. "', '" .$message. "')" ;

			if ( $run = mysqli_query($connection,$query)){
				return true;
			}
			else {
				//echo "string";

				return false;
			}

		}
		else {
			return false;
		}


	}

?>