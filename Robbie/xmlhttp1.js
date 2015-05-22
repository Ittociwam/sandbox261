// nasty path - web service does not use post method

function ajaxtwo(){
var xmlhttp = new XMLHttpRequest();
var url = "http://api.openweathermap.org/data/2.5/weather";
var params = "q=Rexburg,us&units=imperial";
xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        var data1 = JSON.parse(xmlhttp.responseText);
        display(data1);
    }
};
xmlhttp.open("POST", url, true);
xmlhttp.send(params);
}
function display(data) {
//    var out = "";
//    out += "The current weather in " + data.name + " is: "
//            + data.main.temp + " degrees and "
//            + data.weather[0].description + " and the wind speed is: "
//            + data.wind.speed + "\n";
//    console.log("FILE2: " + out);
console.log(data); // this is a 404 ERROR: not found city
}
