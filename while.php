<?php

$emps=array(
    
   "mona","mai","ahmed","islam" 
    
);


$i=0;
while($i<  count($emps)){
    
    echo $emps[$i]."<br>";
    $i++;
}




$emps2=array(
    
    "emp1"=>"mona",
    "emp2"=>"mai",
    "emp3"=>'marwa',
    "emp4"=>"ahmed",
    "emp5"=>"islam"  
    
);

$keys=  array_keys($emps2);
$values=  array_values($emps2);

$k=0;

while($k<  count($emps2)){
    
     echo $keys[$k]."---".$values[$k]."<br>";
    $k++; 
    
}
