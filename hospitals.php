<?php
$harry = array(json_decode(file_get_contents('medical-colleges.json'), true));?>


<a href="admin/index.php" style="margin-left:20px;"><div class="btn">Search by Name</div></a>



<form action="acton.php">


<div class="container">
    <div class="row">
        <?php foreach($harry as $key => $value):
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
            $beds = $value[$i]['hospitalBeds'];
            $capacity =  $value[$i]['admissionCapacity']; 
            ?>
          <div class="col l4 m4 s12" >
                <div class="card"  style =" height : 500px;" >
                    <div class="card-image waves-effect waves-block waves-light">
                    <img src="images/center.jpg" alt="" class="activator" height = "300px;">
                    </div>
                    <div class="card-content">
                     <span class = "card-title activator "><b><?php  echo $x;?></b></span>
                    <p  class="" style="font-size:12px;"><?php echo $state; ?></p>
                    </div>
                    <div class="card-reveal">
                    <span  class=" card-title" style="font-size:20px;" > City : <b><?php  echo $city ;?></b><i class=" fa fa-times right" aria-hidden = "true"> </i></span>
                       
                    <br> <br>
                    <h6 class = "deep-purple-text" > Total beds : <b><?php  echo $beds ; ?></b> </h6>
                    <h6 class = "deep-purple-text" > Beds Vacant : <b><?php  echo $capacity ; ?></b> </h6>   
                         
                    </div>


                   
                </div>
            </div>
        
        <?php } endforeach; ?>
    </div>
</div>
<!--=================-->

</form>