//nasty path - url cannot be null
function ajaxfive(){
var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        var data2 = JSON.parse(xmlhttp.responseText);
        display2(data2);
    }
};
xmlhttp.open("GET", null, true);
//XMLHTTPRequest: failed to load error
xmlhttp.send();
}
function display2(data) {
    var out = "";
    console.log("FILE3: " + data);

}
