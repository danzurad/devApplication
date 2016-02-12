<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="scripts.js"></script>
		<link rel='stylesheet' type='text/css' href='style.css'>
	</head>
	<body onload="showUserList(1)">


			
			<div id="div_mainView">
				<h1>Coding Interview App</h1>
				<p>Developer - Dan Zurad<p>
				<p>Date - 2/11/2016<p>
				<div id="div_tableView"></div>
			</div>

			<div id="div_userDetails" >
				<div id="div_userHeader">
					<p id="p_leftHeader"><b><label id='lbl_name'></label></b></p>
					<p id="p_rightHeader"><label id='lbl_userID'></label></p>
				</div>
				
				<div id="div_userInfo">			
					<!-- Address -->
					<div id="div_address">
						<h3>Address</h3>
						<p>Street: 	<label id="lbl_street"></label></p>
						<p>City:   	<label id="lbl_city"></label></p>
						<p>State: 	<label id="lbl_state"></label></p>
					</div>

					
					
					<!-- Contact Info -->			
					<div id="div_contact">
								<!--<div id="verticalLine"></div>-->
						<h3>Contact Information</h3>
						<p>Phone Number: 	<label id="lbl_phone"></label></p>
						
						<!-- Notes -->				
						<div id="div_notes">
							<h3>Notes</h3>
							<p><textarea id="txt_notes" readonly="true" disabled="true" rows="5">
							test notes</textarea></p>
						</div>
					</div>
				</div>
			</div>
		
	</body>
</html>