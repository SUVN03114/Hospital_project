<?php 
  $jsonData = file_get_contents("js/timeseries.json");
  $data = json_decode($jsonData , true);

  foreach($data as $key => $value){
    $days_count = count($value) - 1;
    $days_count_prev = $days_count - 1;
  }

  $total_confirm= 0;
  $total_recovered= 0;
  $total_deaths= 0;
 foreach($data as $key => $value){
   $total_confirm = $total_confirm + $value[$days_count]['confirmed'];
   $total_recovered = $total_recovered + $value[$days_count]['recovered'];
   $total_deaths = $total_deaths + $value[$days_count]['deaths'];
 }

?>