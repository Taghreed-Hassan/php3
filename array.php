<?php 

//index array 
$cars1 = array("Volvo", "BMW", "Toyota");

echo "I like " . $cars1[0] ;

echo "<br>";

//echo count($cars1);


//Associative Arrays

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

echo $age["Peter"];
echo "<br>";

foreach($age as $key => $value) {
  echo  $key . "  ". $value;
  echo "<br>";


}

//Multidimensional Arrays

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

echo $cars[0][0];
 echo "<br>";

 echo "<br>";
echo "<pre>";
print_r($cars);
echo "<br>";




 //there are many types 



 //








 ?>