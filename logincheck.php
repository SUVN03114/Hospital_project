<?php
include "config.php";



if(isset($_POST["submit"])){

    $name = $_POST["username"];
   
    $pass1 = $_POST["pass1"];
  
     
    $name = mysqli_real_escape_string($conn, $name);
 
    $pass1 = mysqli_real_escape_string($conn, $pass1);
    
      
    $name = htmlentities( $name);
   
    $pass1 = htmlentities( $pass1);
  


    $sql1 = "SELECT password FROM login WHERE name = '$name'";
    $resq = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($resq);
    $pass3  = $row["password"];
   



    if(password_verify($pass1 , $pass3)){
        
        $_SESSION["message"] =  "<span class='green-text center'>Login Success</span>";
        echo $_SESSION["message"];
        header("Location: suvn/admin/index.php");



    }
    else{
        header("Location: index.php");
        $_SESSION["message"] =  "<span class='red-text center'>Credentials don't match</span>";
    }
  
  

}

    ?>