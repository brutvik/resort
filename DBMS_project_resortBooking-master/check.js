function check() {

	var form = document.getElementById('form');
	var p1 = document.getElementById('p1');
	var p2 = document.getElementById('p2');
	var i=0;

	while(i<=form.length)
	{
		if(form[i].value == "")
		{
			alert("Cannot leave fields empty");
			window.history.back();
			return false;
		}
		i++;
	}

	if(p1 != p2)
	{
		alert("Password does NOT match confirm pass");
		window.history.back();
		return false;
	}

	return true;
}