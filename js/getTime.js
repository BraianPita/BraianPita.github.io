date = new Date();
day = date.getDay();
hours = date.toLocaleString('en-US', { hour: 'numeric', hour12: true });
minutes = date.getMinutes();
seconds = date.getSeconds();
var dayOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];



wholeDate = ("Today is: " + dayOfWeek[day ] + ".<br />Current time is: " + hours+ " : "+ minutes+ " : "+ seconds);

document.querySelector("#time").innerHTML = wholeDate;