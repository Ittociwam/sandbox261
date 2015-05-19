/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// make a person
function Person(name, age, sex, hometown) {
    this.name = name;
    this.sex = sex;
    this.age = age;
    this.hometown = hometown;
}

var tim = new Person("Tim", 25, 'm', "Seattle");

console.log("Name: " + tim.name + " age: " + tim.age + " sex: " + tim.sex + " HomeTown: " + tim.hometown);


// happy path - make tim into a JSON string
var timString = JSON.stringify(tim);

console.log (timString);

// nasty path - trying to strigify an undefined variable
try{
var noString = JSON.stringify(aaa);
// throws reference error aaa is not defined
}
catch(e){
    
}
console.log(noString);
// PUTS 'undefined'


// happy path - this does virtually nothing but  it works
var seven = JSON.stringify(7);

// spits out just 7
console.log(seven);


// happy path - creates a string of an object and then displays it 
var o = new Object();
o.key = "value";
var oString = JSON.stringify(o);
console.log(oString);

// happy path - parses the string back into an object and accesses a property. 
var oObject = JSON.parse(oString);
console.log(oObject);
console.log(oObject.key);

// nasy path - json won't work with associative arrays declaired like this
var aa = [];
aa["this"] = "that";

aa["four"] = 4;

aa["food"] = "pizza";

console.log(aa);

var aaString = JSON.stringify(aa);
console.log(aaString);
//NOTE: this just prints '[]'


