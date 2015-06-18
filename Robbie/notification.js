window.onload = function start() {
	var element = document.getElementById('icon');
	element.addEventListener("click", function() {

		window.setInterval(function() {
			var rotation = getRotation(element);
			console.log("rotation: " + rotation + " degrees");
			if (rotation < 15) {
				element.style.transform = "rotate(15deg)";
			} else if (rotation >= 15) {
				element.style.transform = "rotate(-15deg)";
			} else {
				element.style.transform = "rotate(30deg)";
			}

		}, 300);
	}); // repeat forever, polling every 3 seconds
}


function getRotation(element) {
	var st = window.getComputedStyle(element, null);
	var tr = st.getPropertyValue('transform');
	var values = tr.split('(')[1],
		values = values.split(')')[0],
		values = values.split(',');

	var a = values[0];
	var b = values[1];
	var c = values[2];
	var d = values[3];

	return angle = Math.round(Math.asin(b) * (180 / Math.PI));
}