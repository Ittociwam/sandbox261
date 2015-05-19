//Object Creation Functions, Inheritance, Properties, Methods, Instantation

// happy path - create a Person class to create a person, create the person and display them
function Person(name, age, sex, hometown) {
    this.name = name;
    this.sex = sex;
    this.age = age;
    this.hometown = hometown;
}

var tim = new Person("Tim", 25, 'm', "Seattle");

console.log("Name: " + tim.name + " age: " + tim.age + " sex: " + tim.sex + " HomeTown: " + tim.hometown);

// nasty path - trying to access a property that is not there
function Person(name, age, sex, hometown) {
    this.name = name;
    this.sex = sex;
    this.age = age;
    this.hometown = hometown;
}

var tim = new Person("Tim", 25, 'm', "Seattle");

console.log("Name: " + tim.nme + " age: " + tim.age + " sex: " + tim.sex + " HomeTown: " + tim.hometown);


// happy path - making a method for a class 
function Person(name, age, sex, hometown) {
    this.name = name;
    this.sex = sex;
    this.age = age;
    this.hometown = hometown;
    this.ageOneYear = function () {
        this.age++;
    };
}

var tim = new Person("Tim", 25, 'm', "Seattle");

console.log("Name: " + tim.name + " age: " + tim.age);

tim.ageOneYear();

console.log("Name: " + tim.name + " age: " + tim.age);

// nasty path - trying to access a non existant method
function Person(name, age, sex, hometown) {
    this.name = name;
    this.sex = sex;
    this.age = age;
    this.hometown = hometown;
    this.ageOneYear = function () {
        this.age++;
    };
}

var tim = new Person("Tim", 25, 'm', "Seattle");
try{
tim.ageOneYar();

// this throws TypeError: tim.ageOneYar is not a function
}
catch(e){
    
}

//Inheritance 
// happy path - baker inherits from person  // try this outside baker with a baker object
function Baker(bakery, name, age, sex, hometown){
    Person.call(this, name, age, sex, hometown);
    this.bakery = bakery;
    
}

var john = new Baker("John's Bakery", "John", 55, 'm', "Paris");

console.log(john.bakery + " " + john.age + " " + john.hometown);

//Inheritance 
// happy path - baker inherits from person  // try this outside baker with a baker object
function Baker(bakery, name, age, sex, hometown){
    Person.call(this, name, age, sex, hometown);
    this.bakery = bakery;
    
}

var john = new Baker("John's Bakery", "John", 55, 'm', "Paris");

console.log(john.bakery + " " + john.age + " " + john.hometown);


//Inheritance 
// happy path - you can use the .call() function outside of the object creation as well

function Fireman(station){
    this.station = station;
}
var johnny = new Fireman(334);
Person.call(johnny, "Johnny", 45, 'm', "Nepal");

console.log(johnny.station + " " + johnny.name + " "+ johnny.age + " " + johnny.hometown);

// nasty path - private properties? name and age is undefined
function CoolPerson(name, age, sex, hometown) {
    var name = name;
    var sex = sex;
    var age = age;
    var hometown = hometown;

}

var sue = new CoolPerson("Sue", 25, 'f', "Seattle");

console.log("Name: " + sue.name + " age: " + sue.age);
