<?php
$search_value = $_POST["search"];
$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="hospitals_json";
$conn= mysqli_connect($servername,$dbuser,$dbpassword,$dbname);
$sql = "SELECT * FROM data WHERE name LIKE '%{$search_value}%' OR  city LIKE '%{$search_value}%' ";
$res = mysqli_query($conn,$sql);
$output = "";
if(mysqli_num_rows($res) > 0){
    $output = '<table border = "1" width = "100%" cellspacing = "0" cellpadding = "10px" >
    <tr>
    <th width = "60px">Id</th>
    <th>Name </th>
    </tr>
    
    ';
    while($row = mysqli_fetch_assoc($res)){
        $output .= "<tr> <td  align = 'center' >{$row["id"]}</td><td class='td' id='get_name' >{$row["name"]}
        
        

        
        
        
        
        </tr>
    ";
    }
    $output .= "</table>";
   
}
else {
     echo "<p>OOps There is no hospital  naming this try search using street name</p>";
}


?>
    
    <h6 id="search_data">
          <?php  echo $output ;   ?>
    </h6>
