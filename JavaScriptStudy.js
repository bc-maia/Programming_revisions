//interactivity

confirm("this is a confirm test that returns true or false")

prompt('where are you from?');//this prompts an answer box



//Data Types I & II: Numbers & Strings
//Numbers
213
1.12

//Strings
'text'
"text"

//boolean
true
false



//CONSOLE LOGGING
console.log("this log will appears on console")



//List of comparison operators:

> Greater than
< Less than
<= Less than or equal to
>= Greater than or equal to
=== Equal to
!== Not equal to



//Conditional
	//IF - ELSE
	if (false) {
	    console.log("The condition is true");
	} else {
	    console.log("The condition is false");
	}

	//SWITCH
	var color = prompt("What's your favorite primary color?","Type your favorite color here");

	switch(color) {
	    case 'red':
	        console.log("Red's a good color!");
	        break;
	    case 'blue':
	        console.log("That's my favorite color, too!");
	        break;
	    //Add your case here!
	    case 'yellow':
	        console.log("Yellow can be used.")
	        break;
	    default:
	        console.log("I don't think that's a primary color!");
	}

	//LOGICAL OPERATORS
	&& // AND
	var hungry = true
	var foodHere = true

	var eat = function() {
	  if(hungry && foodHere) {
	    return true
	  } else {
	    return false
	  }
	};

	|| // OR
	var tired = false
	var bored = true

	var nap = function() {
	    if(tired || bored) {
	        return true
	    } else {
	        return false
	    }
	};

	! // NOT
	var programming = false

	var happy = function() {
	    if(!programming) {
	        return true
	    } else {
	        return false;
	    }
	};

	//Game with conditionals 2
		var user = prompt("What is your race: Human, Orc, Elf, or Dwarf?").toLowerCase();

		switch(user) {
		    case 'human':
		        var literate = confirm("are you literate?")
		        var nomad = confirm("are you nomad?")
		        if(nomad || !literate) {
		            console.log("barbarian")
		        } else {
		            console.log("common villager")
		        }
		        break;
		    case 'orc':
		        console.log("valley people");
		        break;
		    case 'dwarf':
		        console.log("mountain people");
		        break;
		    case 'elf':
		        var half = confirm("half-elf?")
		        var gills = confirm("have gills?")
		        if(gills && half) {
		            console.log("sea-elf");
		        } else {
		            console.log("forest people");            
		        }
		        break;
		    default:
		        console.log("please choose a pre-defined class.");
		        break;
		}




	//Math and the modulo
	/**
	When % is placed between two numbers, 
	the computer will divide the first number by the second, and then return the remainder of that division.
	So if we do 23 % 10, we divide 23 by 10 which equals 2 with 3 left over. So 23 % 10 evaluates to 3.
	**/
	console.log(14%3);
	console.log(99%8);
	console.log(11%3);



	//Substrings
	// Be careful with the substring's letter positions!
	"wonderful day".substring(3,7);




	//Variables

	// Declare a variable on line 3 called
	// myCountry and give it a string value.
	var myCountry = "Brazil";

	// Use console.log to print out the length of the variable myCountry.
	console.log(myCountry.length);

	// Use console.log to print out the first three letters of myCountry.
	console.log(myCountry.substring(0,3));

	// Check if the user is ready to play!
	var check = confirm("are you ready?");
	var age = prompt("What's your age?");

	if(age < 18) {
	    console.log("Play at your own risk!");
	} else {
	    console.log("got to the gore");
	}

	console.log("Snow White and Batman were hanging out at the bus stop, waiting to go to the shops. There was a sale on and both needed some new threads. You've never really liked Batman. You walk up to him.");

	console.log("Batman glares at you.");

	var userAnswer = prompt("Are you feeling lucky, punk?");

	if(userAnswer === "yes") {
	    console.log("Batman hits you very hard. It's Batman and you're you! Of course Batman wins!");
	} else {
	    console.log("You did not say yes to feeling lucky. Good choice! You are a winner in the game of not getting beaten up by Batman.");
	}

	var feedback = prompt("Please, rate this game: (use 1 -)");

	if(feedback > 8) {
	    console.log("This is just the beginning of my game empire. Stay tuned for more!");
	} else {
	    console.log("I slaved away at this game and you gave me that score?! The nerve! Just you wait!");
	}





//FUNCTIONS
// This is what a function looks like:

var divideByThree = function (number) {
    var val = number / 3;
    console.log(val);
};

// On line 12, we call the function by name
// Here, it is called 'dividebythree'
// We tell the computer what the number input is (i.e. 6)
// The computer then runs the code inside the function!
divideByThree(6);

	//THIS IS ANOTHER WAY TO RIGHT Functions
	function greeting(name){console.log(name);} 

	greeting("crazy One");

		//return keywork
		// Define quarter here.
		function quarter(number) {
		    return number/4;
		}

		if (quarter(12) % 3 === 0 ) {
		  console.log("The statement is true");
		} else {
		  console.log("The statement is false");
		}

	//Another functions
		//isNaN - is not a number
		isNaN("abc") // return true
		isNaN(10)    // return false

		//toUpperCase() and toLowerCase()
		text.toUpperCase() // changes text to upper
		text.toLowerCase() // changes text to lower

		//typeof to figure out what type a variable in JavaScript is
			typeof 100 // returns number


		//hasOwnProperty - This lets us know if an object has a particular property.
			var myObj = {
			    // finish myObj
			    name: "jaspion"
			};

			console.log( myObj.hasOwnProperty('name') ); // should print true
			console.log( myObj.hasOwnProperty('nickname') ); // should print false

			//other example

			var suitcase = {
			    shirt: "Hawaiian",
			    //shorts: "green"
			};

			if(suitcase.hasOwnProperty('shorts')) {
			    console.log(suitcase.shorts);
			} else {
			    suitcase.shorts = "blue";
			    console.log(suitcase.shorts);
			}



//Global vs Local Variables
var my_number = 7; //this has global scope

var timesTwo = function(number) {
    var my_number = number * 2; <- my_number is a local variable
    console.log("Inside the function my_number is: ");
    console.log(my_number);
}; 

timesTwo(7);

console.log("Outside the function my_number is: ")
console.log(my_number); <- here is global



var nameString = function (name) {
	phrase = "Hi, I am" + " " + name
	return phrase
};

console.log(nameString("Maia"))



//LOOPS
	//WHILE
		var understand = true;

		while(understand){
			console.log("I'm learning while loops!");
			understand = false;
		}
		//Remember to set your condition outside the loop!

		var loop = function(n){
			i = 0;
			while(i < n){
				console.log("I'm looping!");
				i++;
			}
		};

		loop(3);

	//DO-WHILE
		loopCondition = false;
		do {
			console.log("I'm gonna stop looping 'cause my condition is " + String(loopCondition) + "!");	
		} while (loopCondition);

	//FOR
		for (var i = Things.length - 1; i >= 0; i--) {
			Things[i]
		};

	//FOR IN
	//
		for (var prop in obj) {
		  console.log("o." + prop + " = " + obj[prop]);
		}




//ARRAYS
//a. store lists of data
//b. can store different data types at the same time
//c. are ordered so the position of each piece of data is fixed
var names = ["Mao","Gandhi","Mandela"];

var sizes = [4, 6, 3, 2, 1, 9];

var mixed = [34, "candy", "blue", 11];

//ARRAY OF ARRAY - MULTIDIMENSIONAL ARRAY
var newArray = [[1,2,3],[4,5,6],[7,8,9]]

//JAGGED
var jagged = [[1,2,3],[true,false],['string']]



//LOOPS and ARRAYS
// Let's print out every element of an array using a for loop

var cities = ["batatinha","Melbourne", "Amman", "Helsinki", "NYC"];

for (var i = 0; i < cities.length; i++) {
    console.log("I would like to visit " + cities[i]);
}

//example
	/*jshint multistr:true */

	var text = "Maia Lorem ipsum dolor sit amet, Maia consectetur adipisicing elit, Maia sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Maia.";
	var myName = "Maia"; 
	var hits = [];

	for(var i=0; i < text.length; i++) {
	    if(myName[0] === text[i]) {
	        for(var j = i; j < i + myName.length; j++) {
	            hits.push(text[j]);
	        }
	    }
	}

	if(hits.length === 0) {
	    console.log("Your name wasn't found!");
	}else {
	    console.log(hits);
	}




//OBJECT
/**
Objects are just collections of information (keys and values) 
between curly braces, like this:
**/

	var myObject = {
	    key: value,
	    key: value,
	    key: value
	};

	//CREATING A NEW OBJECTS

	/**
	There are two ways to create an object: using object literal notation
	(which is what you just did) and using the object constructor.

	Literal notation is just creating an object with curly braces, 
	like this:
	**/
		var myObj = {
		    type: 'fancy',
		    disposition: 'sunny'
		};

		var emptyObj = {};

	//When you use the constructor, the syntax looks like this:

		var myObj = new Object();
	
	/**
	This tells JavaScript: "I want you to make me a new thing, 
	and I want that thing to be an Object.

	You can add keys to your object after you've created it in two ways:
	**/
		myObj["name"] = "Charlie";
		myObj.name = "Charlie";

		var me = new Object();

		me["name"] = "Jaspion"
		me.age = 26


		var myObject = {
		  name: 'Giraya',
		  type: 'Most excellent',
		  interests: ['sports', 'games']
		};




//OBJECTS
	//object literal notation
	var myObject = {};

	//constructor
	var myObject2 = new Object();


	//accessing properties 1
		var bob = {
		  name: "Bob Smith",
		  age: 30
		};

		// here we save Bob's information
		var name1 = bob.name; <- //accessing by dot notation
		var age1 = bob.age;

	//accessing properties 2
		// Take a look at our next example object, a dog
		var dog = {
		  species: "greyhound",
		  weight: 60,
		  age: 4
		};

		var species = dog["species"];
		// fill in the code to save the weight and age using bracket notation
		var weight = dog["weight"];
		var age = dog["age"]; <- //accessing by bracket notation


	//FUNCTION REVIEW
		//METHODS - method is just like a function associated with an object.
		//Methods are similar to functions

		var multiply = function(x,y) { <- //this is a function
		    return x * y;
		}

		console.log(multiply(2,9))

		//THIS keyword
		//refer to whichever object called that method

			// here we define our method using "this", before we even introduce bob
			var setAge = function (newAge) {
			  this.age = newAge;
			};
			// now we make bob
			var bob = new Object();
			bob.age = 30;
			// and down here we just use the method we already made
			bob.setAge = setAge;
			  
			// change bob's age to 50 here
			bob.setAge(50);

		//CUSTOM OBJECT CONSTRUCTOR
		//custom constructors help us to create objects with some pre-defined properties
			function Person(name,age) {
			  this.name = name;
			  this.age = age;
			}

			// Let's make bob and susan again, using our constructor
			var bob = new Person("Bob Smith", 30);
			var susan = new Person("Susan Jordan", 25);
			// help us make george, whose name is "George Washington" and age is 275
			var george = new Person("George Washington", 275);

		//constructor and function
			function Rabbit(adjective) {
			    this.adjective = adjective;
			    this.describeMyself = function() {
			        console.log("I am a " + this.adjective + " rabbit");
			    };
			}

			// now we can easily make all of our rabbits

			rabbit1 = new Rabbit("fluffy");
			rabbit2 = new Rabbit("happy");
			rabbit3 = new Rabbit("sleepy");

			rabbit1.describeMyself();
			rabbit2.describeMyself();
			rabbit3.describeMyself();

		
		//ARRAYS OF OBJECTS
			// Our Person constructor
				function Person(name,age) {
				    this.name = name;
				    this.age = age;
				}

			// Now we can make an array of people
				family = new Array();

				family[0] = new Person("alice", 40);
				family[1] = new Person("bob", 42);
				family[2] = new Person("michelle", 8);
				family[3] = new Person("timmy", 6);

			// loop through our new array
				for(member in family) {
				    console.log(family[member].name)
				}


		//PASSING OBJECTS INTO FUNCTIONS
			function Person (name, age) {
			    this.name = name;
			    this.age = age;
			}

			// We can make a function which takes persons as arguments
			// This one computes the difference in ages between two people
			var ageDifference = function(person1, person2) {
			    return person1.age - person2.age;
			};

			// Make a new function, olderAge, to return the age of
			// the older of two people
			function olderAge(person1, person2) {
			    if(person1.age > person2.age)
			        return person1.age
			    else
			        return person2.age
			}

			// Let's bring back alice and billy to test our new function
			var alice = new Person("Alice", 30);
			var billy = new Person("Billy", 25);

			console.log("The older person is " + olderAge(alice, billy));



	//BUILDING AN ADDRESS BOOK

	var bob = {
	    firstName: "Bob",
	    lastName: "Jones",
	    phoneNumber: "(650) 777-7777",
	    email: "bob.jones@example.com"
	};

	var mary = {
	    firstName: "Mary",
	    lastName: "Johnson",
	    phoneNumber: "(650) 888-8888",
	    email: "mary.johnson@example.com"
	};

	var contacts = [bob, mary];

	function printPerson(person) {
	    console.log(person.firstName + " " + person.lastName);
	}

	function list() {
		var contactsLength = contacts.length;
		for (var i = 0; i < contactsLength; i++) {
			printPerson(contacts[i]);
		}
	}

	var search = function(lastName) {
		var contactsLength = contacts.length;
		for (var i = 0; i < contactsLength; i++) {
			if(contacts[i].lastName === lastName) {
			    printPerson(contacts[i]);
			}
		}
	}

	search("Jones");

	function add(name, last, mail, phone) {
	    newContact = {
	        firstName: name,
	        lastName: last,
	        phoneNumber: phone,
	        email: mail
	    }
	    contacts[contacts.length] = newContact;
	}

	add("Jaspion","Giraya","(650) 999-9999","jaspion.giraya@example.com");

	list();


	//By bracket notation [] you can access an attribute by its name
	var james = {
		job: "programmer",
		married: false
	};

	// set to the first property name of "james"
	var aProperty = "job";

	// print the value of the first property of "james" 
	// using the variable "aProperty"
	console.log(james[aProperty]);


	//CLASSES
	/**
	When you make a constructor, you are in fact defining a new class. 
	A class can be thought of as a type, or a category of 
	objects—kind of like how Number and String are types in JavaScript.
	**/
	function Person(name,age) {
		this.name = name;
		this.age = age;
	}
	
	function Circle(radius) {
	    this.radius = radius;
	}

	//JavaScript automatically defines the PROTOTYPE for class with a constructor
	//if a method is needed you extends the PROTOTYPE and all members of the class use it

	className.prototype.newMethod =
		function() {
		statements;
	};

	//example
		function Dog (breed) {
		  this.breed = breed;
		};

		// here we make buddy and teach him how to bark
		var buddy = new Dog("golden Retriever");
		Dog.prototype.bark = function() {
		  console.log("Woof");
		};
		buddy.bark();

		// here we make snoopy
		var snoopy = new Dog("Beagle");
		/// this time it works!
		snoopy.bark();


	//INHEIRITANCE
	/**
		Remember, inheritance lets us see and use properties and methods 
		from another class. To say that Penguin inherits from Animal, 
		we need to set Penguin's prototype to be Animal
	**/

	// the original Animal class and sayName method
		function Animal(name, numLegs) {
		    this.name = name;
		    this.numLegs = numLegs;
		}
		Animal.prototype.sayName = function() {
		    console.log("Hi my name is " + this.name);
		};

		// define a Penguin class
		var Penguin = function(name) {
		    this.name = name;
		    this.numLegs = 2;
		}

		// set its prototype to be a new instance of Animal
		Penguin.prototype = new Animal();

		var penguin = new Penguin("Jaspion");
		penguin.sayName(); <- // Penguin classe inherited .sayName() from Animal

		/**
		If JavaScript encounters something it can't find in the current 
		class's methods or properties, it looks up the prototype chain 
		to see if it's defined in a class that it inherits from. 
		This keeps going upwards until it stops all the way at the top: 
		the mighty Object.prototype (more on this later). 
		By default, all classes inherit directly from Object, 
		unless we change the class's prototype, like we've been doing for Penguin and Emperor
		**/

		// original classes
			function Animal(name, numLegs) {
			    this.name = name;
			    this.numLegs = numLegs;
			    this.isAlive = true;
			}
			function Penguin(name) {
			    this.name = name;
			    this.numLegs = 2;
			}
			function Emperor(name) {
			    this.name = name;
			    this.saying = "Waddle waddle";
			}

			// set up the prototype chain
			Penguin.prototype = new Animal();
			Emperor.prototype = new Penguin();

			var myEmperor = new Emperor("Jules");

			console.log(myEmperor.saying); // should print "Waddle waddle"
			console.log(myEmperor.numLegs); // should print 2
			console.log(myEmperor.isAlive); // should print true



	//Open to the PUBLIC 
	/**
	In JavaScript all properties of an object are automatically public. 
	Public means that they can be accessed outside the class. 
	Think of these properties as the information a class is willing to share.**/

		function Person(first,last,age) {
		   this.firstName = first;
		   this.lastName = last;
		   this.age = age;
		}

		var john = new Person('John','Smith',30);
		var myFirst = john.firstName;
		var myLast = john.lastName;

		//declare variable myAge set to the age of the john object.
		var myAge = john.age;


	//PRIVATE VARIABLES
	/**
	Just as functions can have local variables which can only be accessed 
	from within that function, objects can have private variables. 
	Private variables are pieces of information you do not want to publicly share, 
	and they can only be directly accessed from within the class.**/
		function Person(first,last,age) {
		   this.firstname = first;
		   this.lastname = last;
		   this.age = age;
		   var bankBalance = 7500;
		}

		// create your Person 
		var john = new Person("John", "Silvester", 50);

		// try to print his bankBalance
		console.log(john.bankBalance); <- //This makes bankBalance a private variable.


		//ACCESSING PRIVATE VARIABLES
			function Person(first,last,age) {
			    this.firstname = first;
			    this.lastname = last;
			    this.age = age;
			    var bankBalance = 7500;
			    
			    /* We can define a public method that returns the value of a private variable.
			    An object's private variables can only be accessed by other methods 
				that are part of that same object. So, we just used an object's 
				public method to access a private variable! */
			    this.getBalance = function() {
			        return bankBalance;
			    };
			}

			var john = new Person('John','Smith',30);
			console.log(john.bankBalance);

			// create a new variable myBalance that calls getBalance()
			myBalance = john.getBalance();
			console.log(myBalance);


		//PRIVATE METHODS
			/*Using constructor notation, a property declared as 
			this.property = "someValue;" will be public, whereas a property 
			declared with var property = "hiddenValue;" will be private.*/
			function Person(first,last,age) {
			    this.firstname = first;
			    this.lastname = last;
			    this.age = age;
			    var bankBalance = 7500;
			    
			    var returnBalance = function() {  <- //Private
			        return bankBalance;
			    };
			    
			    // create the new function here
			    Person.prototype.askTeller = function() {
			        return returnBalance;
			    }
			}

			var john = new Person('John','Smith',30);
			console.log(john.returnBalance);
			var myBalanceMethod = john.askTeller();
			var myBalance = myBalanceMethod();
			console.log(myBalance);


		//PASSING ARGUMENTS TO PRIVATE METHODS
			function Person(first,last,age) {
			   this.firstname = first;
			   this.lastname = last;
			   this.age = age;
			   var bankBalance = 7500;
			  
			   this.askTeller = function(pass) {
			     if (pass == 1234) return bankBalance;
			     else return "Wrong password.";
			   };
			}

			var john = new Person('John','Smith',30);
			/* the variable myBalance should access askTeller()
			   with a password as an argument  */
			var myBalance = john.askTeller(1234);


		//LOOKING INSIDE THE CLASS

			//typeof EXAMPLE
				var languages = {
				    english: "Hello!",
				    french: "Bonjour!",
				    notALanguage: 4,
				    spanish: "Hola!"
				};

				// print hello in the 3 different languages
				for(lang in languages)
				    if(typeof languages[lang] === "string")
				        console.log(languages[lang]);


			//TYPEOF APPLIED
				function Dog (breed) {
				    this.breed = breed;
				};

				// add the sayHello method to the Dog class 
				// so all dogs now can say hello
				Dog.prototype.sayHello = function() {
				    console.log("Hello this is a " +this.breed+ " dog")
				}

				var yourDog = new Dog("golden retriever");
				yourDog.sayHello();

				var myDog = new Dog("dachshund");
				myDog.sayHello();


	//EVERYTHING IS AN OBJECT
		//every JavaScript object has some baggage associated with it
		// what is this "Object.prototype" anyway...?
		var prototypeType = typeof Object.prototype;
		console.log(prototypeType);

		// now let's examine it!
		var hasOwn = Object.prototype.hasOwnProperty("hasOwnProperty");
		console.log(hasOwn);


	//PRIVATE EYE
		/*Recall that:
		Public properties can be accessed from outside the class
		Private properties can only be accessed from within the class
		Using constructor notation, a property declared as this.property = "someValue;" will be public, whereas a property declared with var property = "hiddenValue;" will be private.*/
		function StudentReport() {
		    var grade1 = 4;
		    var grade2 = 2;
		    var grade3 = 1;
		    this.getGPA = function() {
		        return (grade1 + grade2 + grade3) / 3;
		    };
		}

		var myStudentReport = new StudentReport();

		for(var x in myStudentReport) {
		    if(typeof myStudentReport[x] !== "function") {
		        console.log("Muahaha! " + myStudentReport[x]);
		    }
		}

		console.log("Your overall GPA is " + myStudentReport.getGPA());






	//FINAL PROJECT

	function StaffMember(name,discountPercent){
	    this.name = name;
	    this.discountPercent = discountPercent;
	}

	var sally = new StaffMember("Sally",5);
	var bob = new StaffMember("Bob",10);

	// Create yourself again as 'me' with a staff discount of 20%
	var me = new StaffMember("eu", 20);

	var cashRegister = {
	    total:0,
	    lastTransactionAmount: 0,
	    add: function(itemCost){
	        this.total += (itemCost || 0);
	        this.lastTransactionAmount = itemCost;
	    },
	    scan: function(item,quantity){
	        switch (item){
	        case "eggs": this.add(0.98 * quantity); break;
	        case "milk": this.add(1.23 * quantity); break;
	        case "magazine": this.add(4.99 * quantity); break;
	        case "chocolate": this.add(0.45 * quantity); break;
	        }
	        return true;
	    },
	    voidLastTransaction : function(){
	        this.total -= this.lastTransactionAmount;
	        this.lastTransactionAmount = 0;
	    },
	    // Create a new method applyStaffDiscount here
	    applyStaffDiscount: function(employee) {
	        this.total *= ((100- employee.discountPercent)/100)
	    }
	    
	};

	cashRegister.scan('eggs',1);
	cashRegister.scan('milk',1);
	cashRegister.scan('magazine',3);
	// Apply your staff discount by passing the 'me' object 
	// to applyStaffDiscount
	cashRegister.applyStaffDiscount(me);

	// Show the total bill
	console.log('Your bill is '+cashRegister.total.toFixed(2));
