/* 
 * To casdfhange this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * DOM Manipulation Using createElement, appendChild, insertBefore, removeChild, etc.
 */

function domManip() {
    //Happy
    var p = document.createElement("p");
    var text = document.createTextNode("Hello Dom Manipulation!");
    p.appendChild(text);
    document.body.appendChild(p);

// nasty path - throws TypeError parameter 1 is not of type 'Node' can't just send a string 
// must be a node
    try {
        var p = document.createElement("p");
        p.appendChild("tryign to append a string");
        document.body.appendChild(p);
    }
    catch (e) {

    }

// happy path. I suppose this makes an element called asdf and assigns text to it
// you must be able to name your elements whatever you want.
    var asdf = document.createElement("asdf");
    var text = document.createTextNode("What element is asdf?");
    asdf.appendChild(text);
    document.body.appendChild(asdf);

// happy path. This adds text to empty heading tags on my document
    var title = document.createTextNode("Dom Manipulation!");
    document.getElementById("myh1").appendChild(title);

// nasty path - this appends a child to head. will not display in the document.
    var par = document.createElement("p");
    var text = document.createTextNode("Appending child to head?");
    par.appendChild(text);
    document.head.appendChild(par);

// Happy insert before
    var aDiv = document.createElement("div");
    var name = document.createTextNode("Insert before heading!");
    aDiv.appendChild(name);
    document.body.insertBefore(name, document.getElementById("myh1"));


// nasty path. you can't insert a node before a node that 
// is not a child of the specified node. In this case myh1.
    try {
        var aDiv = document.createElement("div");
        var name = document.createTextNode("Insert before heading inside of heading?");
        aDiv.appendChild(name);
        document.getElementById("myh1").insertBefore(name, document.getElementById("myh1"));
    }
    catch (e) {
    }

//happy path - removes the child node (text?) of myh1
    document.getElementById("myh1").removeChild(document.getElementById("myh1").childNodes[0]);

//    try {
////nasty path - throwws exception The node to be removed is not a child of this node?
//        document.removeChild(document.body);
//    }
//    catch (e) {
//
//    }
//    try {
////nasty path - same error as above
//        document.removeChild(document.body[0]);
//    }
//    catch (e) {
//
//    }
//    try {
////nasty path - same error as above
//        var body = document.body;
//        document.removeChild(body);
//    }
//    catch (e) {
//
//    }
//    // nasty path - cannot remove children of all? thorws error.
//var all = document.getElementsByTagName("*");
//
//for (var i=0; i < all.length; i++) {
//     all.removeChild(all.childNodes[i]);
//     //Throws cannot read property 0 of undefined.
//}

//happy/nasty path - this takes an existing element and puts it into
// another element. good or bad depending on what you are trying to do

// var ele = document.getElementById("myh1")
// document.getElementById("adiv").appendChild(ele);

// nasty path - Uncaught TypeError: Failed to execute 'appendChild' on 'Node': parameter 1 is not of type 'Node'.
document.getElementById("adiv").appendChild(null);

}
