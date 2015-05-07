//NOTE: if the local storage is called before page load it will not work
function storage() {
    // not clearing the storage can result in a nasty path
    localStorage.clear();
 
// happy path - storing a string    

localStorage.setItem("lastname", "Bise");

var myLastName = localStorage.getItem("lastname");

console.log(myLastName);

//happy path - storing an array
var names = ["Bob", "Tim", "Jerry", "Alice"];

localStorage["names"] = JSON.stringify(names);


var myNames = JSON.parse(localStorage.getItem("names"));
console.log(myNames);

// happy path - storing an associative array / object
function Person (name, age, sex, hometown){
this.name = name;
this.sex = sex;
this.age = age;
this.hometown = hometown;
}

var bill = new Person("Bill", 25, 'm', "Rexburg");

var personString = JSON.stringify(bill);

localStorage["myPerson"] = personString;

var retrivedPersonString = localStorage["myPerson"];

var myPerson = JSON.parse(retrivedPersonString);

console.log(myPerson);


// nasty path - cannot just pass one parameter here  
try {
localStorage.setItem("nastyone");

var n1 = localStorage.getItem("nastyone");

console.log(n1); 
// throws Uncaught TypeError: Failed to execute 'setItem' on 'Storage': 2 arguments required, but only 1 present.
}
catch(e){
    
}
// happy path - can store numbers as well

localStorage.setItem("num1", 456);

var num = localStorage.getItem("num1");

console.log(num); 

//nasty path - accessing an item that is non exsistant

var nt = localStorage.getItem("notThere");

console.log(nt);
//NOTE: puts out 'null'

// happy path - use local storage as a global array

localStorage["mything"] = "hello there!";

var yeah = localStorage["mything"];

console.log(yeah); 

// happy path - use a string variable to access

var helloString = "this is a string variable to store hello";

localStorage[helloString] = "hello";

var h = localStorage[helloString];

console.log(h); 

// happy path - use a number as index

localStorage[75] = "seventy-five";

var strNum = localStorage[75];

console.log(strNum); 

// nasty path - I think json does not like this type of associated array
var car = [];

car["wheels"] = 4;
car["color"] = "green";
car["miles"] = "50000";


var carString = JSON.stringify(car);

localStorage["myCar"] = carString;

var retrivedCarString = localStorage["myCar"];

var myCar = JSON.parse(retrivedCarString);

console.log(myCar);

// nasty path - associative array objects must be declaired as follows
var car = new Object();

car["wheels"] = 4;
car["color"] = "green";
car["miles"] = "50000";


var carString = JSON.stringify(car);

localStorage["myCar"] = carString;

var retrivedCarString = localStorage["myCar"];

var myCar = JSON.parse(retrivedCarString);

console.log(myCar);

// nasty path - reached maximum storage limit 
// in Call Stack: Paused on exception: 'DOMException: Failed to execute 'setItem' 
//                on 'Storage': Setting the value of '455405' exceeded the quota'.

//for(var i = 0; i < 500000; i++){
//localStorage.setItem(i, i);
//}

}