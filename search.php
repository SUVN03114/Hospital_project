<?php include "includes/header.php";?>

<!--===========================================================================================================-->

<?php include "includes/navigation.php"; ?>

<?php 



$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="hospitals_json";
$conn= mysqli_connect($servername,$dbuser,$dbpassword,$dbname);
if(isset($_POST["submit"])){
    $search_value = $_POST['q'];
    $search_value = (int)$search_value;
    
    
    
   
    $sql = "SELECT * FROM data WHERE id LIKE '%{$search_value}%' ";
    $res = mysqli_query($conn,$sql);
   
 
    
    if(mysqli_num_rows($res)>0){
         $row=mysqli_fetch_assoc($res);
         $hospital_name = $row["name"];
         $hospital_city = $row["city"];
         $hospital_beds = $row["hospitalBeds"];
         $hospital_available = $row["admissionCapacity"];

         ?>

         
       
       
       <style>
            body{
              background-color:rebeccapurple;
            }
    
     
          </style>
    
     
        <section class='fcards'>
            <div>
            <div class="row">
                <div class="col s12 m12 l6" style="padding: 50px 50px;">
                    <div class="card">
                        <div class="card-image">
                            <img src="Images/h1.jpg">
                            <span class="card-title"><?php echo $hospital_name; ?></span>
                        </div>
                        
                    </div>
                </div>

                <div class="col s12 m12 l6" style="padding: 50px 50px;">
                    <div class="white-text" style="text-align:left;">
                        <h5 class="Center"><?php echo $hospital_name ; ?></h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In tenetur eius corrupti neque totam recusandae dolorum quod magni dolore alias nemo magnam deleniti, aliquam nostrum aut corporis laboriosam quidem fugit!</p>
                       <p> <strong>Bed Available : <?php echo $hospital_available ; ?></strong></p>
                       <p><strong>Total Beds :<?php echo $hospital_beds ; ?></strong></p>
                       <p><strong>City : <?php echo $hospital_city ; ?></strong></p>
                      
                       <a href="#" class="btn white-text center">Contact</a>
                    </div>
                </div>
                </div>

                <div>
                  
            </div>
        </section>
      
     
        
        

   












<?php
       

    }


     
}

?>
<?php include "includes/footer.php";?>
<!--===========================================================================================================-->

</div>
<?php  include "includes/script.php";?>
<!--===========================================================================================================-->
</body>
</html>



        
        

   
