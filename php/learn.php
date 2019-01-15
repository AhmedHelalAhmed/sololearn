<?php
/**
 * Created by PhpStorm.
 * User: ahmedhelal
 * Date: 1/15/19
 * Time: 8:07 AM
 */

echo "Hello World!";

echo "I love PHP!";

/*

To create a constant, use the define() function:

define(name, value, case-insensitive)

name: Specifies the name of the constant;
value: Specifies the value of the constant;
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false;
*/

$x ++; // equivalent to $x = $x+1;
$x --; // equivalent to $x = $x-1;


$x ++; // post-increment
$x --; // post-decrement
++ $x; // pre-increment
-- $x; // pre-decrement


$a = 2;
$b = $a ++; // $a=3,  $b=2
$a = 2;
$b = ++ $a; // $a=3,  $b=3


$name1 = "David";
$name2 = "Amy";
$name3 = "John";


$names = array("David", "Amy", "John");


$names[ 0 ] = "David";
$names[ 1 ] = "Amy";
$names[ 2 ] = "John";


echo $names[ 1 ]; // Outputs "Amy"


$people = array("David" => "27", "Amy" => "21", "John" => "42");
// or
$people[ 'David' ] = "27";
$people[ 'Amy' ] = "21";
$people[ 'John' ] = "42";


$people = array("David" => "27", "Amy" => "21", "John" => "42");

echo $people[ 'Amy' ]; // Outputs 21"


$people = array(
    'online'  => array('David', 'Amy'),
    'offline' => array('John', 'Rob', 'Jack'),
    'away'    => array('Arthur', 'Daniel'),
);


echo $people[ 'online' ][ 0 ]; //Outputs "David"

echo $people[ 'away' ][ 1 ]; //Outputs "Daniel"

$i = 1;
while ($i < 7)
{
    echo "The value is $i <br />";
    $i ++;
}


$i = 5;
do
{
    echo "The number is " . $i . "<br/>";
    $i ++;
} while ($i <= 7);

//Output
//The number is 5
//The number is 6
//The number is 7


for ($a = 0 ; $a < 6 ; $a ++)
{
    echo "Value of a : " . $a . "<br />";
}


$names = array("John", "David", "Amy");
foreach ($names as $name)
{
    echo $name . '<br />';
}

// John
// David
// Amy


$today = 'Tue';

switch ($today)
{
    case "Mon":
        echo "Today is Monday.";
        break;
    case "Tue":
        echo "Today is Tuesday.";
        break;
    case "Wed":
        echo "Today is Wednesday.";
        break;
    case "Thu":
        echo "Today is Thursday.";
        break;
    case "Fri":
        echo "Today is Friday.";
        break;
    case "Sat":
        echo "Today is Saturday.";
        break;
    case "Sun":
        echo "Today is Sunday.";
        break;
    default:
        echo "Invalid day.";
}
//Outputs "Today is Tuesday."


$day = 'Wed';

switch ($day)
{
    case 'Mon':
        echo 'First day of the week';
        break;
    case 'Tue':
    case 'Wed':
    case 'Thu':
        echo 'Working day';
        break;
    case 'Fri':
        echo 'Friday!';
        break;
    default:
        echo 'Weekend!';
}

//Outputs "Working day"


$x = 1;
switch ($x)
{
    case 1:
        echo "One";
    case 2:
        echo "Two";
    case 3:
        echo "Three";
    default:
        echo "No match";
}

//Outputs "OneTwoThreeNo match"


function sayHello()
{
    echo "Hello!";
}

sayHello(); //call the function

//Outputs "Hello!"


function multiplyByTwo($number)
{
    $answer = $number * 2;
    echo $answer;
}

multiplyByTwo(3);
//Outputs 6


function multiply($num1, $num2)
{
    echo $num1 * $num2;
}

multiply(3, 6);
//Outputs 18


function setCounter($num = 10)
{
    echo "Counter is " . $num;
}

setCounter(42);  //Counter is 42
setCounter();  //Counter is 10


function mult($num1, $num2)
{
    $res = $num1 * $num2;

    return $res;
}

echo mult(8, 3);
// Outputs 24


// Start the session
session_start();

$_SESSION[ 'color' ] = "red";
$_SESSION[ 'name' ] = "John";


// files

$myfile = fopen("file.txt", "w");


// append to file

$myFile = "test.txt";
$fh = fopen($myFile, 'a');
fwrite($fh, "Some text");
fclose($fh);


// The file() function reads the entire file into an array.
// Each element within the array corresponds to a line in the file:

$read = file('names.txt');
foreach ($read as $line)
{
    echo $line . ", ";
}

// example
$read = file('names.txt');
$count = count($read);
$i = 1;
foreach ($read as $line)
{
    echo $line;
    if ($i < $count)
    {
        echo ', ';
    }
    $i ++;
}

/*
class Person {
    public $age; //property
    public function speak() { //method
        echo "Hi!";
  }
}



$bob = new Person();

echo $bob->age;



class Person {
    public $age;
    function speak() {
        echo "Hi!";
    }
}
$p1 = new Person(); //instantiate an object
$p1->age = 23; // assignment
echo $p1->age; // 23
$p1->speak(); // Hi!



class Dog {
    public $legs=4;
    public function display() {
        echo $this->legs;
    }
}
$d1 = new Dog();
$d1->display(); //4

$d2 = new Dog();
$d2->legs = 2;
$d2->display(); //2


class Person {
    public function __construct() {
        echo "Object created";
    }
}
$p = new Person();




class Person {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}
$p = new Person("David", 42);




class Person {
  public function __destruct() {
    echo "Object destroyed";
  }
}
$p = new Person();












class TestMe {
  public function __construct() { echo "2"; }
  public function __destruct() { echo "1"; }
}
$test = new TestMe();
unset($test);




class Animal {
  public $name;
  public function hi() {
    echo "Hi from Animal";
  }
}
class Dog extends Animal {
}

$d = new Dog();
$d->hi();






class Singer {
static $name = "Jone";
  static function toSing() {
    echo self::$name;
  }
}
Singer::toSing();




*/






