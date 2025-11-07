<?php 
echo "Hello World<br>";
echo 5+8;
$txt="Ali";
echo"i love $txt! <br>";
$x=5;
$z=20;
echo $x+$z;
var_dump($x)."<br>";
var_dump(true);
var_dump([2, 3, 56]);
echo "<br>";
$x = "hi <br>";
$y = "hi";
$z = "hi";
echo $x;
echo $y;
echo "<br>";
echo $z;
echo "<br>";
// FICNTIPN SCOPE 
$x=10;
function myText(){
$x=15;  
echo "<p> variable x inside function is :$x</p>";
}
myText();
echo "<p>Variable x outside function is: $x</p>";
$a=5;
$b=15;
function myTest(){
    global $a,$b;
    $a=$b+$a;
};
myTest();
echo $a;

//--statc keyword
function mystatic(){
  static $x=0;
  echo $x;
  $x++;
   
}
echo"<br>";
mystatic();
echo"<br>";
mystatic();
echo"<br>";
mystatic();
print "<h2>PHP is Fun!</h2>";
echo "<h2>PHP is Fun!</h2>";
$text1="atif";
print '<p> he is ' .$text1. '</p>';
$cars=array("BMW","AUDI","Mustang");
foreach($cars as $car){
    echo $car."<br>";
}
// var_dump($cars); 
class Car {
    public $brand;
    public $color;
    public $engine;

    function setData($brand, $color,$engine) {
        $this->brand = $brand;
        $this->color = $color;
        $this->engine=$engine;

    }

    function getData() {
        return "Brand: $this->brand, Color: $this->color, Engine: $this->engine"; 
    }
}


$car1 = new Car();
$car1->setData("BMW", "Red", "2500cc");
echo $car1->getData();
echo "<br>";
echo strlen("heloo world");
echo str_word_count("Helo world");
echo "<br>";
echo strtoupper("Helo world");
echo "<br>";
$x="hello world";
echo str_replace("world","dolly",$x);
echo "<br>";
echo strrev($x);
echo "<br>";
$str="hi,my,name,is,ali";
$exp=explode(",",$str);
print_r($exp);
echo "<br>";
// concatination----
$h="hi";
$p="ali";
$f=$h.  "   "  . $p;
echo $f;
echo "<br>";
$c="hi is there any one in the home";
echo substr($c,6);//for slicing  start from index 6 and onwwards  
echo substr($c,-5,3);
echo "<br>";    
define("GREETING","Welcome to w3 schools");
function myTst(){
    echo GREETING;
}
myTst();
echo "<br>";  
$t=1;  
if($t<3){
    echo "have a good day ";
}
else{
    echo "dont have a good day";
}
echo "<br>";  

$g=20;
if($g>19){
    if($g>18)
    {
        echo "This is right";
    }
}
echo "<br>";  
$h=10;
$v= $h<9?"true":"false";
echo $v;
$favcolor = "red";
echo "<br>";    
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red";
        break;

    case "blue":
        echo "Your favorite color is blue";
        break;

    default:
        echo "Your favorite color is neither red nor blue";
        break;
}
echo "<br>";    
function myFamily($lastname, ...$firstname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}
$a = myFamily("Ali", "Jane", "John", "Joey");
echo $a;
function addNumber($a,$b){
    return $a+$b;

}
echo addNumber(5,5);
echo "<br>";
// ----------------------------------------------IMPORTANT----------------------------------------
//----Associative Arrays--------------
$car1=["brand"=>"ford","model"=>1947,"engine"=>"2500cc"];
echo $car1["brand"];
echo "<br>";
foreach($car1 as $key => $value )
{
echo "$key : $value <br>";
}
$car2=["brand"=>"toyota","name"=>"cross","year"=>"2025"];
foreach($car2 as $key => $value)
{
    echo "$key : $value <br>";

}
$car2 ["engine"]="2500cc";
// foreach($car2 as $key => $value)
// {
//     echo "$key : $value <br>";

// }
print_r($car2);
echo "<br>";
//removing
unset($car2["engine"]);
foreach($car2 as $key => $value)
{
    echo "$key : $value <br>";

}   
asort($car2);
foreach($car2 as $key => $value)
{
    echo "$key : $value <br>";  

};

$car2["engine"]="3000cc";
foreach($car2 as $key => $value)
{
    echo "$key : $value <br>";  


};
unset ($car2["engine"]);
foreach($car2 as $key => $value)
{
    echo "$key : $value <br>";  


};
//-------Global Variable 
$l = 10;
function tesat(){
    global $l;
    echo $l;
};
tesat();
echo "<br>";
// ------------loops
$len=10;
$count=0;
for($i=1; $i<=$len;$i++)
{
echo $i;
}
$var2=5;
$len2=12;
$out=0;
for($i=0; $i<=$len2; $i++)
{
$out= $var2 * $i;
 echo $out ;
 echo "<br>";
}
$colors = ["red", "green", "blue", "yellow"];
foreach($colors as $clr)
{
    echo $clr;  
     echo "<br>";

}
$car = ["brand" => "Ford", "model" => 2024, "engine" => "2500cc"];
foreach($car as $key=>$value)
{
    echo "$key : $value";
         echo "<br>";

}
$c="******";
for($i=0;$i<5;$i++)
{
    echo $c;
    echo "<br>";

}
$rows = 5; // number of rows

for ($i = 1; $i <= $rows; $i++) {      
    for ($j = 1; $j <= $i; $j++) {     
        echo "*";
    }
    echo "<br>"; // move to next row
}



 ?>

