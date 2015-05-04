// VARIABLES
var a;
var b = 1;
var c = 2;
var d = 2;
var e = "hello";


// happy path - display a variable
console.log("b: " + b);

// happy path - assign a variable to another variable and display it.
b = c;
console.log("b: " + b);

// nasty path - display a variable that has not been initialized. 
console.log("a: " + a);
//NOTE: this results in undefined

// nasty path - trying to perform calculations with an uninitialized variable
console.log(a + b);
//NOTE: results in NaN

// happy path - changes d to type string and assigns it the same value of string e
d = e;
console.log("d: " + d);


//ARRAYS

// happy path - creates an array of things
var things = ["thing1", "thing2", "thing3"];
//NOTE:  can also use new keyword  var things = new Array("thing1", "thing2", "thing3");

// happy path iterating through an array
for (var i = 0; i < things.length; i++)
    console.log(things[i]);

// nasty path - accessing an item that  has not been defined
console.log(things[5]);
//NOTE: results in undefined

// happy path - assigning an item to a spot further along in the array
things[5] = "thing6";
console.log(things[5]);

// happy path iterating through an array again
for (var i = 0; i < things.length; i++)
    console.log(things[i]);
// NOTE: this time it outputs 2 undefined spots between index 2 and index 5 but
// spits out "thing6" at index 5

// happy path - we can have negative indexes in javascript
things[-1] = "thing-1";
console.log("[-1]: " + things[-1]);

// happy path - this seems to work even though I have an extra comma at the end
// and i did not include the var keyword
myArray = [1, 2, 3, 4, 5, ];
console.log("myArray[4]: " + myArray[4]);

// happy path - arrays can hold all kinds of data it seems.
otherArray = [1, 2, 3, 4, 5, "hello", 4.3];
console.log("otherArray[5]: " + otherArray[5]);

try {
// happy path - arrays can hold all kinds of data it seems.
    otherArray1 = [1, 2, 3, 4, 5, hello, 4.3];
    console.log("otherArray1[5]: " + otherArray1[5]);
// global variable undefined error
}

catch (e) {

}

//ASSOCIATIVE ARRAYS
var vehicle = [];

vehicle["type"] = "car";
vehicle["color"] = "green";
vehicle["year"] = "2005";
vehicle["mileage"] = 50000;

// happy path - displays the year attribute
console.log("year: " + vehicle["year"]);

// nasty path - tries to access by index 0
console.log(vehicle[0]);
//NOTE: results in undefined. 

// happy path - assigns hello to index 0
vehicle[0] = "hello";
console.log(vehicle[0]);

// happy path - assigns hello to index -1
vehicle[-1] = "neg1";
console.log(vehicle[-1]);