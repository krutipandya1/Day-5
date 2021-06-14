 <?php
 echo "<br>";
$cars=array("Volvo","BMW","Toyota");
echo count($cars);

echo "<br>";
$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));

echo "<br>";
$a=array(5,15,25);
echo array_sum($a);

echo "<br>";
$a=array(5,5);
echo(array_product($a));

echo "<br>";
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));

echo "<br>";
$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
  
echo "<br>";
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];

echo "<br>";
$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));

 echo "<br>";
 $a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));

echo "<br>";
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);

echo "<br>";
$number = range(0,5);
print_r ($number);

echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);

echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);

echo "<br>";
$my_array = array("red","green","blue","yellow","purple");

shuffle($my_array);
print_r($my_array);

echo "<br>";
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
  
 echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));

echo "<br>";
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);

echo "<br>";
$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo current($people) . "<br>";
echo end($people);

 echo "<br>";
 $firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$result = compact("firstname", "lastname", "age");

print_r($result);

echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($result);

echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);

echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($a1,$a2);
print_r($result);

echo "<br>";
$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));

echo "<br>";
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);

echo "<br>";
$a=array("red","green","blue");
array_pop($a);
print_r($a);

echo "<br>";
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));

echo "<br>";
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);
?>