//nasty path - can only use response xml if returning file is an xml file
function ajaxsix(){
var xmlhttp = new XMLHttpRequest();
var url = "http://api.openweathermap.org/data/2.5/weather?q=Portland,OR,us&units=imperial";


xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        var data2 = JSON.parse(xmlhttp.responseXML);
        display2(data2);
    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();
}
function display2(data) {
    var out = "";
    console.log("FILE3: " + data);
    // this is displayed as null

}