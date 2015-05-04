
function storage() {
localStorage.setItem("lastname", "Bise");

document.getElementById('result').innerHTML = localStorage.getItem("lastname");
}