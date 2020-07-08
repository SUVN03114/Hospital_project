
<?php
include "config.php";



if(isset($_POST["submit"])){

    $name = $_POST["username"];
    $email = $_POST["email"];
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];
     
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $pass1 = mysqli_real_escape_string($conn, $pass1);
    $pass2 = mysqli_real_escape_string($conn, $pass2);
      
    $name = htmlentities( $name);
    $email = htmlentities( $email);
    $pass1 = htmlentities( $pass1);
    $pass2 = htmlentities( $pass2);


    $sql1 = "SELECT * FROM login WHERE name = '$name'";
    $resq = mysqli_query($conn, $sql1);
    $prints = mysqli_num_rows($resq);
    if($prints >0 ){
        
        header("Location: index.php");
         $_SESSION["message"] =  "<span class='red-text center'>username already exists</span>";

    }
    else{
        $sql2 = "SELECT * FROM login WHERE email = '$email'";
        $res2 = mysqli_query($conn, $sql2);
        $prints1 = mysqli_num_rows($res2);
        if($prints1 >0){
            header("Location: index.php");
            $_SESSION["message"] =  "<span class='red-text center'>E-mail exists</span>";





        }
        else{
            
  //////checking email ends


        if($pass1 == $pass2){
            $pass1 =password_hash($pass1 ,PASSWORD_BCRYPT);
            $sql = "INSERT INTO login (name,password,email) VALUES('$name','$pass1', '$email')";
         $res = mysqli_query($conn ,$sql);
    
         
    
         if($res){
           
             $_SESSION["message"] =  "<span class='green-text center'>You have been suceesfully registered, Login to Continue</span>";
             header("Location: suvn/admin/index.php");
         }
         else{
    
            header("Location: index.php");
             $_SESSION["message"] =  "<span class='red-text center'>OOPS , Something Went Wrong</span>";
    
           
    
         }
        }
    
     
       



    }

    









        }











     

 



}


?>