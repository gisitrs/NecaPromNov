
function adminToWebsite(action, message){
	if (confirm(message)) {
	//If user say 'yes' to confirm
	 window.location.href = "redirect_website.php";
	} 
}

function adminLogOut(action, message){
	if (confirm(message)) {
	//If user say 'yes' to confirm
	 window.location.href = "redirect_login.php";
	} 
}