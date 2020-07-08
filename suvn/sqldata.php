<?php

$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="hospitals_json";
$conn= mysqli_connect($servername,$dbuser,$dbpassword,$dbname);

$harry = array(json_decode(file_get_contents('medical-colleges.json'), true));


foreach($harry as $key => $value):
    $res = ($value['data']);

   
    
    
/*
ther comment out
*/


 

     
     endforeach;
    
     foreach($res as $key => $value):
        for($i = 0; $i<=count($value)-2; $i++){
            $x =$value[$i]['name'];
            $state = $value[$i]['state'];
            $city = $value[$i]['city'];
            $bed = $value[$i]['hospitalBeds'];
            $capacity = $value[$i]['admissionCapacity'];
            $sql = "INSERT INTO data(name ,hospitalBeds, city,admissionCapacity) VALUES('$x','$bed','$city','$capacity')";
            mysqli_query($conn,$sql);
        } endforeach; 

?>