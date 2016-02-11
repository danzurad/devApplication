<!DOCTYPE html>
<html>
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="scripts.js"></script>

	</head>
	<body onload="showUserList(1)">
		<?php		

			echo "<link rel='stylesheet' type='text/css' href='style.css'>";
	  
			echo "</br></br><div id='div_userMain'></div></br></br>";		
			echo "<div id='div_userDetail'>";
			echo "<label>UserID: </label><label id='lbl_userID'></label> </br>";
			echo "<label>Name: </label><label id='lbl_name'></label></br>";
			echo "<label>Address: </label><label id='lbl_address'></label></br>";
			echo "<label>Phone: </label><label id='lbl_phone'></label></br>";
			echo "<label>Notes: </label><label id='lbl_notes'></label></br>";
			echo "</div>";


		?>  
	</body>
</html>