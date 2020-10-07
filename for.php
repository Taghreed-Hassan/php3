<?php 


for ($i = 1; $i <= 10; $i++) {
    echo $i ."<br>";
}

echo "-------<br>";

for ($x = 0; $x <= 100; $x+=10) {

  echo "The number is: $x <br>";
}

echo "-------<br>";
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);



	// in arrayyy




	$emps2=array(
    
    "emp1"=>"mona",
    "emp2"=>"mai",
    "emp3"=>'marwa',
    "emp4"=>"ahmed",
    "emp5"=>"islam"  
    
);


$keys=  array_keys($emps2);
$values=  array_values($emps2);

for($i=0;$i<count($emps2);$i++){
    
    echo $keys[$i]."---".$values[$i]."<br>";
}
