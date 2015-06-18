/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * Standard JavaScript Events Including those for Mobile Devices ( Ex. onTouchBegin, onLoad, etc.)
 */

//happy path onload event, a function is called
function function0() {
	console.log("Function0 body onload!");
}

//happy path - page calls function 1 onload
function function1() {
	console.log("Function1 button onclick!");
}

//happy path - using chrome mobile emulator calls button on 'touch'
function function2() {
	console.log("Function2 button ontouch!");
}

try {
	// nasty path - does 'button2' is undefined, this won't work
	//unless called after docuemnt is fully loaded. 
	document.getElementById('button2').onclick = function() {
		console.log("n1onclick in javascript.");
		//this throws Uncaught TypeError: Cannot set property 'onclick' of null
	}
} catch (e) {

}

try {
	// Nasty path - cannot check for tag names until page is fully loaded
	document.getElementsByTagName('body')[0].onload = function() {
		document.getElementById('button2').onclick = function() {
			console.log("n2onclick in javascript.");
		}
	}
} catch (e) {

}


// Happy path - this works becasue it waits for the page to 
// be completely loaded. 
window.onload = function() {

	document.getElementById('button2').onclick = function() {
		console.log("n3onclick in javascript.");
	}

	//MOBILE TESTING

	// nasty path? - when in mobile emulation, this turns into a double click(touch) event
	document.getElementById('other').onmouseover = function() {
		console.log("hovering");
	}

	// this worked once and now it has stopped?
	document.getElementById('other').ontouchmove = function() {
		console.log("moving");
	}

	// nasty path - this does not seem to do anything
	document.getElementById('other').ontouchend = function() {
		console.log("stopped touching");
	}


	//happy path - this listener watches for a touch move and logs every pixel we move while
	// "touching"
	document.getElementById('other').addEventListener("touchmove", function() {
		console.log("using an evenent listener touch move");
	});

	//nasty path - Does nothing as expected
	document.getElementById('other2').addEventListener(null, function() {
		console.log("null event listener?");
	});

	//nasty path - Does nothing as expected
	document.getElementById('other2').addEventListener("ontouch", null);

	//happy path - touch end example and calling function from outside
	document.getElementById('other2').addEventListener("touchend", outside);

	var obj = document.getElementById('other3')
	obj.addEventListener('touchstart', function(event) {
		if (event.targetTouches.length == 1) {
			var touch = event.targetTouches[0];
			console.log(touch);
			obj.style.left = touch.pageX + 'px';
			obj.style.top = touch.pageY + 'px';
		}
	}, false);

}

function outside() {
	console.log("this is a function declaired outside of doc.load")
}

//multi-touch events event.changedTouches returns array of num of touches on the  screen