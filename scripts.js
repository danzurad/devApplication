			function showUserList(pageNum) {

				request = new XMLHttpRequest();

				request.onreadystatechange = function() {
					if (request.readyState == 4 && request.status == 200) {
						document.getElementById("div_userMain").innerHTML = request.responseText;
					}
				};
				request.open("GET","userTable.php?q="+pageNum,true);
				request.send();
					
			}

			function showUserDetail(userID) {

				var data = { "userID": userID };
				//data = $(this).serialize() + "&" + $.param(data);
							
				$.post("userDetail.php", data,
				function(data,status){
					parsedData = JSON.parse(data);
					$("#lbl_userID").text(parsedData.userID);
					$("#lbl_name").text(parsedData.name);
					$("#lbl_address").text(parsedData.address);
					$("#lbl_phone").text(parsedData.phone);
					$("#lbl_notes").text(parsedData.notes);
				});
			}
			
						//$(document).ready(function(){
				//$("#lbl_userID").text("Hello world!");
				
				//$(".pointericon").mouseenter(function(){
				//	alert("You entered p1!");
				//});
			//});
