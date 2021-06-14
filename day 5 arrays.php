 <?php
 // Numerical array
 //method 1
 $a[0] = 10;
 $a[1] = 20;
 $a[2] = 20.50;
 $a[3] = "C";
 $a[4] = "4";
 
 //index dynamic array
 //method 2
 echo "<br>";
 $a[] = 10;
 $a[] = 20;
 $a[] = 20.50;
 $a[] = "C";
 $a[] = "4";
 
 //method 3
 //always use this method to create an array
 echo "<br>";
 $a = array(10,20,20.50,"C","4","php");
 //print array value
 echo $a[3];
 
 //print whole array
 echo "<br>";
 for($i=0;$i< count($a);$i++)
 {
	 echo "<br>".$a[$i];
 }
 
 
	
//associative array 
//key = value
//method 1
echo "<br>";
$a[0] = 10;
$a['c'] = "computer";	
$a['php'] ="web development";
$a[10] = "ten";
$a[50] = 50.50;

//method 2
//always use this method
echo "<br>";
$a = array
(
	0 => 10,
	"c" => "computer",
	"php" => "web development",
	10 => "ten",
	50 => 50.50,
);
//print value
echo "C for".$a['c'];

foreach($a as $value)
{
	echo "<br>Value is $value";
}
foreach($a as $key => $value)
{
	echo "<br> key is <b>$key</b> and value is <b>$value</b>";
}
//3 inbuilt functions to debug an array
 echo "<br>";
 echo "<pre>";
 print_r($a);
  echo "<pre>";
   echo "<pre>";
   var_dump($a);
    echo "<pre>";
 ?>