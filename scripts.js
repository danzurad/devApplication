//**************************************************************//
// Name: showUserList()											//
// Parms: page number of data to display						//
// Returns: A constructed table result for the passed in page # //
// Notes: used normal javascript for this one.					//
//**************************************************************//
function showUserList(pageNum) {

	request = new XMLHttpRequest();

	request.onreadystatechange = function() {
		if (request.readyState == 4 && request.status == 200) {
			document.getElementById("div_tableView").innerHTML = request.responseText;
			document.getElementById("lbl_page" + pageNum).style.color = "orange";	
		}
	};
	request.open("GET","userTable.php?q="+pageNum,true);
	request.send();		
}


//**************************************************************//
// Name: showUserDetail()										//
// Parms: userID to fetch User data for							//
// Returns: user data in JSON format							//
// Notes: uses jquery to make an ajax post request for user info//
//**************************************************************//
function showUserDetail(userID) {

	var data = { "userID": userID };
							
	$.post("userDetail.php", data,
	function(data,status){
		parsedData = JSON.parse(data);
		$("#lbl_userID").text(parsedData.userID);
		$("#lbl_name").text(parsedData.name);
		$("#lbl_street").text(parsedData.street);
		$("#lbl_city").text(parsedData.city);
		$("#lbl_state").text(parsedData.state);
		$("#lbl_phone").text(parsedData.phone);
		$("#txt_notes").text(parsedData.notes);
					
		$("#div_userDetails").show();				

	});
}

