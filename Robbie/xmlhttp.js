//happy path - simple ajax request


function ajaxone() {
var xmlhttp = new XMLHttpRequest();
var url = "http://api.openweathermap.org/data/2.5/weather?q=Rexburg,us&units=imperial";

xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        var data = JSON.parse(xmlhttp.responseText);
        myFunction(data);
    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();
}

function myFunction(data) {
    var out = "";
    out += "The current weather in " + data.name + " is: "
            + data.main.temp + " degrees and "
            + data.weather[0].description + " and the wind speed is: "
            + data.wind.speed + "\n";
    console.log("FILE1: " + out);
}





