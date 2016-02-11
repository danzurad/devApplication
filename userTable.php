		<?php		

			$query = "SELECT userID, FirstName, LastName FROM users";
			$result = db_query(db_connect(), $query);

			$headers = mysqli_fetch_fields($result);
			$rows =  mysqli_fetch_all($result);
			$numRows = mysqli_num_rows($result);
			
			define("RowsPerPage", 5);
			$pageNum = intval($_GET['q']);
			$numPages = ceil($numRows / RowsPerPage);
			
			//Default values, in case something goes wrong
			$startID = 1;
			$endID = $numRows;
			
			if ($pageNum == 1) { //First Page
				$startID = 1;
				$endID = RowsPerPage;
			}
			else if ($pageNum > 0 && $pageNum < $numPages) { //In-between pages
				$endID = $pageNum * RowsPerPage;
				$startID = $endID - (RowsPerPage - 1);
			}
			else if ($pageNum = $numPages) { //Last page
				$startID = ($pageNum * RowsPerPage) - RowsPerPage + 1;				
				$endID = $numRows;
			}
			


			//Construct column headers
			echo "<div><table><tr>";
			  foreach ($headers as $val)
				{
					if ($val->name != "userID") { echo "<th>" . $val->name . "</th>"; } //sloppy
				}
			echo "</tr>";
				
			
			//Construct result rows
			//psuedo logic. for each row in query result. if the rowID is within the start and end index, grab the data
			//could probably be improved if we can fetch the 5 exact rows we want from the query result and work with them directly
			//rather then loop through the entire result set. see if I can rework
			
			$rowID = 1;
			foreach ($rows as $record)
			{
				if ($rowID >= $startID && $rowID <= $endID) {
					echo "<tr id='user_" . $rowID . "' onclick='showUserDetail($record[0])'>";
					for ($i = 1; $i < count($record); $i++) { //start i at 1, skips userID
						echo "<td>" . $record[$i] . "</td>"; 
						}
					echo "</tr>";
				}
				$rowID++;
			}			
			
			echo "</table></div>";


			//Generate page numbers dynamically also
			echo "</br><div>";
			for ($pg = 1; $pg <= $numPages; $pg++) {
				echo "<label id='lbl_page" . $pg . "' class='pointericon' onclick='showUserList(" . $pg . ")'> [" . $pg . "] </label>";
			}
			echo "</div>";
	
			
			/*while($r = mysqli_fetch_assoc($result)){
 
				$msg[] = array("name" => $r['name'], "email" => $r['email'], "status" => $r['status']);
			}
			*/
			//	----- FUNCTIONS ----- 	//
			
			//**************************************************************//
			// Name: db_connect()											//
			// Parms: none													//
			// Description: Initialized a connection to the database		//
			//**************************************************************//
				function db_connect() {
					
					//Load database configuration
					$config = parse_ini_file('config.ini');
				
					// Connect to database
					static $db_connection;
					$db_connection = mysqli_connect('localhost', $config['username'], $config['password'], $config['database']);
				
					if($db_connection === false) { return mysqli_connect_error(); }
					
					Return $db_connection;
				}
				
				
				
			//**************************************************************//
			// Name: db_connect()											//
			// Parms: mysqli_connect object, sql query string				//
			// Description: Connects to and queries a database				//
			//**************************************************************//
				function db_query($connection, $query) {
					Return mysqli_query($connection, $query);
				}				


		?>  
