		<?php		
			include 'databaseHandler.php';

			//pickup userID from post call
			$q = $_POST["userID"];

			//Query the database for user with matching ID
			$result = db_query("SELECT * FROM users WHERE userID = $q");
			$row = mysqli_fetch_array($result);

			//Format the query result into an array
			$userInfo['userID'] = $row[0];
			$userInfo['name'] = $row[1] . " " . $row[2];
			$userInfo['street']  = $row[3];
			$userInfo['city']  = $row[4];
			$userInfo['state']  = $row[5];
			$userInfo['phone'] = $row[6];
			$userInfo['notes'] = $row[7];		   
		   
			//encode array json
			echo json_encode($userInfo);
			
		?> 