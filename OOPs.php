<?php 

//classes
class Person{
    public string $name; //this variable can ONLY accept string values
    public ?string $surname; //this variable can access string and null values (indicated by ?)
    private int $age; 
    public static int $counter; //the keyword static implies that this variable belongs to the class. unlike the others, which are created for each new instance of the class, this is created only once.

    public function __construct($name, $surname){ //parameterized constructor
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++; //access static variables using keyword self
    }
    public function setAge($age){ //this is something called a setter function, which is used to set the values of private values without accessing them outside the class
        $this->age = $age; //age cannot be accessed outside the class without using the setter function
    }
    public function getAge(){ //this is a getter function. it simply returns the private variable without altering it. used to access private variables beyond their scope
        return $this->age; 
    }
    public static function get_counter(){
        return self::$counter;
    }
}
//private, protected, default, public -> same scope as Java access modifiers.
//use protected to make variables accessible to child classes
$p = new Person("fatima", "ali");
echo Person::$counter; //or use:
echo Person::get_counter();

class Student extends Person{ //inheritance. basically means copy over all properties, and constructors from class Person and add your own, new properties below
    public string $studentId;

    public function __construct($name, $username, $studentId){
        $this->studentId = $studentId;
        parent::__construct($name, $username); // calls the parent constructor (class Person constructor)
                                                // If you need to overrite some property in the parent constructor, call the parent constructor first, then set the value of the variable to the new value
                                                
        
    }
}
?>