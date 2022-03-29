<?php
// This is single line php comment
/*
This is multiple line comment
*/

### Variables ###
#################

$var = "Hello World<br>";
// echo $var;

function fun(){
    // global $var;
    // echo $var;
    echo $GLOBALS['var'];
}

function fun2(){
    static $x=2;
    $x = $x+2;
    echo $x;
}

// fun();
fun2();
echo "<br>";
fun2();

#### print ###
##############

echo "<br>";
echo "I am using echo";
echo "<br>";
print "I am using print";
echo "<br>";

// print_r
$a = array("red", "green", "blue");
print_r($a);
echo "<br>";
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
print_r($b);

// var_dump function
echo "<br>";
echo var_dump($a);

echo "<br>";
echo "<br>";
#### Data types ###
###################

$var1 = "This is String";
$var2 = 10; // This is integer
$var3 = 10.25; // this is float
$var4 = true; // this is boolean
$var5 = Array(1,2,3,4,5); // this is array
echo $var1."<br>".$var2." this is integer"."<br>".$var3." this is float"."<br>".$var4." this is boolean"."<br>";
print_r($var5);
echo " this is array"."<br>";

// Object

class Car {
    public $model;
    public $color;
    public function __construct($model,$color) {
        $this->model = $model;
        $this->color = $color;
    }
    public function message() {
        return "This is my car ".$this->model." ".$this->color; 
    }
}

$myCar = new Car("Grand i10","white");
echo $myCar->message()."<br>";

// null

$var6 = null;
var_dump($var6);

echo "<br>";
echo "<br>";
### Conditional Statements ###
##############################

if(false){
    echo "condition is True";
}else{
    echo "condition is False";
}
echo "<br>";
if (false) {
    echo "condition is True";
  } elseif (true) {
    echo "First condition is false and This condition True";
  } else {
    echo "condition is False";
  }

echo "<br>";
echo "<br>";
### Switch Statements ###
#########################

$n = 1;
switch ($n) {
    case 1:
        echo "n is 1";
        break;
    case 2:
        echo "n is 2";
        break;
    case 3:
        echo "n is 3";
        break;
    default:
        echo "n is not in these cases";
        break;
}

echo "<br>";
echo "<br>";
### Loop Statements ###
#######################

//while loop
while($n<=10){
    echo $n."<br>";
    $n++;
}
echo "<br>";
// do while
$n = 0;
do {
    echo $n."<br>";
    $n++;
} while ($n>=1 and $n<=10);
// for loop
echo "<br>";
$n = 10;
for($i=1;$i<=$n;$i++){
    echo $i."<br>";
}
// for each loop
echo "<br>";

$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
  echo $value."<br>";
}

echo "<br>";
echo "<br>";
### function ###
################

function printName($name){
    echo $name."<br>";
}
printName("Nishant");
//Passing Arguments by Reference
$name = "Nishant";
function fullName(&$name){
    $name = $name." Pundir";
}
fullName($name);
echo $name;


echo "<br>";
echo "<br>";
### Array functions ###
#######################

$nums=array(1,7,8,3,4,6,2,10,5,9);

// short array
sort($nums);
print_r($nums);
echo "<br>";
rsort($nums);
print_r($nums);
echo "<br>";

// count function
echo count($nums);
echo "<br>";

// array column function
$names = array(
    array(
        "first_name" => "Nishant",
        "last_name" => "Pundir",
    ),
    array(
        "first_name" => "Arpan",
        "last_name" => "Jain",
    ),
    array(
        "first_name" => "Aayush",
        "last_name" => "Jain",
    )
    
);
$last_names = array_column($names, 'last_name');
print_r($last_names);
echo "<br>";

// array combine
$first = array("name","course","age");
$second = array("Nishant Pundir","App",22);
$combine_result = array_combine($first,$second);
print_r($combine_result);
echo "<br>";

// array diff
$arr1 = array(1,2,3);
$arr2 = array(1,2,4);
print_r(array_diff($arr1,$arr2)); //Array ( [2] => 3 )
print_r(array_diff($arr2,$arr1)); //Array ( [2] => 4 )
echo "<br>";

// array merge
print_r(array_merge($arr1,$arr2));
echo "<br>";

// array keys
print_r(array_keys($combine_result));
echo "<br>";

// array values
print_r(array_values($combine_result));
echo "<br>";

// array unique
$arr3 = array(1,1,2,2,3,3);
print_r(array_unique($arr3));
echo "<br>";

// array map
function fun3($v){
    return($v*$v);
}
print_r(array_map("fun3",$arr1));
echo "<br>";

// array replace
$arr4 = array(1,2,3);
$arr5 = array(4,5);
print_r(array_replace($arr4,$arr5));
echo "<br>";

// array push
array_push($arr1,4);
print_r($arr1);
echo "<br>";

// array pop
array_pop($arr1);
print_r($arr1);
echo "<br>";


echo "<br>";
echo "<br>";
### file System ###
###################
echo file_exists("text.txt");
echo "<br>";
echo file_get_contents("text.txt");
echo "<br>";
echo file_put_contents("text.txt", "Hello World!");

echo "<br>";
echo "<br>";
### Date ###
############
date_default_timezone_set("Asia/Calcutta"); // set Indian Time zone
echo date("d F Y"); // today date
echo "<br>";
echo date("h:i:sa"); // time
echo "<br>";
// string to time
$d=strtotime("10:30pm April 15 2014");
echo date("d F Y h:i:sa", $d);

echo "<br>";
echo "<br>";
### JSON ###
############

$jsonobj = '{"firstName":"Nishant","lastName":"Pundir"}';

// json_decode function
print_r(json_decode($jsonobj));
echo "<br>";
print json_decode($jsonobj)->{"firstName"};
echo "<br>";

// json_encode
$age = array("firstName"=>"Arpan", "lastName"=>"Jain");

echo json_encode($age);
?>