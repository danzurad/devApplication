<!DOCTYPE html>
<html>
	<body onload="showUserList(1)">
		<?php		

					$config = parse_ini_file('config.ini');
				
					// Connect to database
					//static $db_connection;
					
					echo "TEST!";
					
					define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
					define('DB_PORT', getenv('OPENSHIFT_MYSQL_DB_PORT')); 
					define('DB_URL', getenv('OPENSHIFT_MYSQL_DB_URL')); 
					echo DB_HOST;
					echo DB_PORT;
					echo DB_URL;
					
					//echo $host;
					
					//$db_connection = mysqli_connect($host, $config['username'], $config['password'], $config['database']);
				
					//if($db_connection === false) { return mysqli_connect_error(); }
					
					//Return $db_connection;

		?>  
	</body>
</html>