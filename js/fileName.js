// JavaScript source code

function getFileName()
	{
	var fileName = document.getElementById("fileName").value;
	var splitted = fileName.split(".");
	var myRegExp = new RegExp("[^A-Za-z0-9_ .-]")
	if(fileName.match(myRegExp) || splitted.length < 2)
	{
		document.getElementById("fileNameOutput").innerHTML = "File Format Incorrect";
		return 0;
	}
	


	document.getElementById("fileNameOutput").innerHTML = "Output: " + (splitted[splitted.length - 1]);
	}

