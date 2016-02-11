		<?php					
	
				//**************************************************************//
				// Name: db_connect()											//
				// Parms: none													//
				// Returns: A connection string to the database
				// Description: Initialized a connection to the database		//
				//**************************************************************//
				function db_connect() {
					
					//Load database configuration
					$config = parse_ini_file('config.ini');
					$host = "localhost"; //default value for dev
				
					//Construct connection information (release mode only)
					if ($config['mode'] == "release") {				
						define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
						define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 
						$host = DB_HOST . ":" . DB_PORT;
					}
					
					//Connect to database
					static $db_connection;
					$db_connection = mysqli_connect($host, $config['username'], $config['password'], $config['database']);
				
					//Test connection
					if($db_connection === false) { return mysqli_connect_error(); }
					
					Return $db_connection;
				}			
				
				
				
				//**************************************************************//
				// Name: db_query												//
				// Parms: 1 - String to query against the database				//
				// Returns: Result set from the query							//
				// Description: Handles a query to the database					//
				//**************************************************************//
					function db_query($query) {
						
						$connection = db_connect();
						$result = mysqli_query($connection, $query);
						
						Return $result;
					}				
		?> 