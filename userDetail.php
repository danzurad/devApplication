		<?php		
		
			$q = $_POST["userID"];

			$connection = db_connect();
			$query = "SELECT * FROM users WHERE userID = $q";
			$result = mysqli_query($connection, $query);
			$row = mysqli_fetch_array($result);

			   class User {
			  public $userID = "";
			  public $name = "";
			  public $address  = "";
			  public $phone = "";
			  public $notes = "";
		   }

		   $e = new User();
		   $e->userID = $row[0];
		   $e->name = $row[1] . " " . $row[2];
		   $e->address  = $row[3] . ", " . $row[4] . ", " . $row[5];
		   $e->phone = $row[6];
		   $e->notes = $row[7];

		   echo json_encode($e);

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

		?> 