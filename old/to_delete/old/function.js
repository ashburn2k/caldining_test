var nav = 0;
function showNavbar(navbar) {
	navID = document.getElementById(navbar);
	if (nav == 0) {
		navID.style.visibility='visible';
		nav = 1;
	}
	else if (nav == 1) {
		navID.style.visibility='hidden';
		nav = 0;
	}
	
}