//nasty path - ready state is not four throws unexpected end of input
function ajaxfour(){
var xmlhttp = new XMLHttpRequest();
var url2 = "http://api.openweathermap.org/data/2.5/weather?q=Rexburg,us&units=imperial";

xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState == 2 && xmlhttp.status == 200) {
        var data2 = JSON.parse(xmlhttp.responseText);
        display2(data2);
    }
};
xmlhttp.open("GET", url2, true);
xmlhttp.send();
}
function display2(data) {
    var out = "";
    console.log("FILE3: " + data);

}