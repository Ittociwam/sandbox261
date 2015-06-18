// window.onload = function() {
// 	var elements = document.getElementsByClassName('item');

// 	for (var i = 0; i < elements.length; i++) {
// 		console.log('doing this: ' + i);
// 		elements[i].onclick = function() {

// 		}
// 	}
// }

function showHide(theDiv) {
	if (theDiv.style.height == "40px") {
		theDiv.style.height = "150px";
		//console.log();

	} else {
		theDiv.style.height = "40px";
		//console.log();

	}
}