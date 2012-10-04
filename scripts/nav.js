function not_login(id, id1, event) {
	var div = document.getElementById(id);
	var div1 = document.getElementById(id);
	switch(event) {
		case true:
			div.style.display = "block";
			div1.style.display = "none";
			break;
		case false:
			div.style.display = "none";
			div.style.div1.style.display = "block";
			break;
		default:
			alert('Error');
			break;
	}
}