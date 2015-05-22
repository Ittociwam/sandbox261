//nasty path - space in query string
function ajaxthree(){
var xmlhttp = new XMLHttpRequest();
var url2 = "http://api.openweathermap.org/data/2.5/weat her?q=Rexburg,us&units=imperial";

xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
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