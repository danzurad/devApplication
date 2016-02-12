		<?php		
			include 'databaseHandler.php';
			define("RowsPerPage", 5);
			
			//fetch sql result data we need to work with to construct user table
			$result = db_query("SELECT userID, FirstName, LastName FROM users");
			$headers = mysqli_fetch_fields($result);
			$rows =  mysqli_fetch_all($result);
			$numRows = mysqli_num_rows($result);
			
			//Get clicked page tab number
			$pageNum = intval($_GET['q']);
			
			
			
			//Determine the number of pages needed based on the result set size and the defined RowsPerPage
			//Calculate the starting and ending row ID to display on the main page
			$numPages = ceil($numRows / RowsPerPage);
			$startID = 1;
			$endID = $numRows;
			
			if ($pageNum == 1) { //If displaying first Page
				$startID = 1;
				$endID = RowsPerPage;
			}
			else if ($pageNum > 0 && $pageNum < $numPages) { //If displaying page in between
				$endID = $pageNum * RowsPerPage;
				$startID = $endID - (RowsPerPage - 1);
			}
			else if ($pageNum = $numPages) { //If displaying last page
				$startID = ($pageNum * RowsPerPage) - RowsPerPage + 1;				
				$endID = $numRows;
			}
			


			//Construct header columns for table
			echo "<div id='div_usersTable'><table><tr>";
			  foreach ($headers as $val)
				{
					if ($val->name != "userID") { echo "<th>" . $val->name . "</th>"; } //sloppy
				}
			echo "</tr>";
				
				

			//Construct record columns for table
			$rowID = 1;
			$rowIdentifier = "";
			foreach ($rows as $record)
			{
				if ($rowID >= $startID && $rowID <= $endID) {
					if ($rowID % 2 == 0) { $rowIdentifier = "evenRow"; } else { $rowIdentifier = "oddRow"; }							//Determine if row is even or odd
					echo "<tr id='user_" . $rowID . "' onclick='showUserDetail($record[0])' class='" . $rowIdentifier . "'>";  	//userID passed onclick parameter
					for ($i = 1; $i < count($record); $i++) { 																	//start i at 1 to skip displaying userID
						echo "<td>" . $record[$i] . "</td>"; 
						}
					echo "</tr>";
				}
				$rowID++;
			}			
			echo "</table>";

			

			//Generate page numbers/tabs based on number of pages
			echo "<div id='div_pageTabs'>";
			for ($pg = 1; $pg <= $numPages; $pg++) {
				echo "<label id='lbl_page" . $pg . "' onclick='showUserList(" . $pg . ")'> [" . $pg . "] </label>";
			}
			echo "</div></div>";
		?>  
