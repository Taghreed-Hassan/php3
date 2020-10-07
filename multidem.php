<?php


//index in index

$array1=array(
    
     array("ahmed","mai"),//0
     array("ali","islam"),//1
     array("mona","mohamed"),//2
     array("osama","kareem")//3
);
foreach ($array1 as $value1) {
    
    foreach ($value1 as $value11) {
        echo $value11."---";
    }
    
    echo "<br>";
}

echo '<br>----------------------------<br>';
//index in asoc

$array2=array(
   "first"=> array("ahmed","mai"),//0
   "sec"=>  array("ali","islam"),//1
    "third"=> array("mona","mohamed"),//2
    "forth"=> array("osama","kareem")//3

);

foreach ($array2 as $key2 => $value2) {
    echo $key2."<br>";
    
    
    foreach ($value2 as $value22) {
         echo $value22."---";
    }
    echo '<br>';
}


echo '<br>----------------------------<br>';


//assoc in index

$array3=array(
    
     array("stud1"=>"ahmed","stude2"=>"mai"),//0
     array("stud1"=>"ali","stude2"=>"islam"),//1
     array("stud1"=>"mona","stude2"=>"mohamed"),//2
     array("stud1"=>"osama","stude2"=>"kareem")//3  
    
);
foreach ($array3 as $value3) {
    
    foreach ($value3 as $key3 => $value33) {
        echo $key3."--".$value33."<br>";
    }
    echo '<br>';
}


echo '<br>----------------------------<br>';
//assoc in assoc
$array4=array(
   "first"=> array("stud1"=>"ahmed","stude2"=>"mai"),//0
   "sec"=>  array("stud1"=>"ali","stude2"=>"islam"),//1
    "third"=> array("stud1"=>"mona","stude2"=>"mohamed"),//2
    "forth"=> array("stud1"=>"osama","stude2"=>"kareem")//3

);


foreach ($array4 as $key4 => $value4) {
    echo $key4."<br>";
    foreach ($value4 as $key44 => $value44) {
        echo $key44."---".$value44."<br>";
    } 
    echo '<br>';
}
