//Triggering CSS3 Transitions and Animations with JavaScript
function alterDiv() {

    // happy path - this transisions properly
    var element = document.getElementById("myDiv");
    element.style.transition = "background 1s linear 0s";
    element.style.background = "red";


    var ele2 = document.getElementById("div2");
//Nasty path - This will try to change everything at the same time.
//YOu must list the seperate transitions on one transition command.

//    element.style.transition = "opacity 1s linear 1s";
//    element.style.opacity = .5;
//
//    element.style.transition = "width 1s";
//    element.style.width = "400px";
//
//    element.style.transition = "background 1s linear 1s";
//    element.style.background = "green";


// Happy path - this is the correct way to alter multiple properties at one and have them
// happen one at a time
    ele2.style.transition = "opacity 1s linear 1s, width 1s, background 1s linear 1s, width 1s";
    ele2.style.opacity = .5;
    ele2.style.width = "400px";
    ele2.style.background = "green";
    ele2.style.width = "200px";
    
    // nasty path - div will not slowly transition when it is absolute in css
   var ele3 = document.getElementById("div3");
   ele3.style.transition = "left 2s linear 1s";
   ele3.style.left = "194px";
   
   // nasty path - div will not slowly transition when it is absolute in css
   var ele3 = document.getElementById("div3");
   ele3.style.transition = "left 2s linear 1s";
   ele3.style.left = "194px";

// happy path - setting the transition in the css
   var ele4 = document.getElementById("div4");
   ele4.style.height = "400px";
   ele4.style.width = "300px";
   ele4.style.background = "blue";

   // happy path - setting the transition in the css
   var ele5 = document.getElementById("div5");

     ele5.style.transform = "rotate(90deg)";

}
