 <?php
 //1) if else if loops
 $a = 1;
 if($a==10)
 {
	 echo "A is 10";
 }
 else if($a<10)
 {
	 echo "A is < 10";
 }
 else
 {
	 echo "A is > 10";
 }
 
 echo "<br>";
 //2) switch loops
 $a = 1;
 switch($a)
 {
	 case 1:
	 echo "one";
	 break;
	 
	 case 2:
	 echo "two";
	 break;
	 
	 case 3:
	 echo "three";
	 break;
	 default:
	 echo "please select from 1 to 3";
 }
 ?>
  