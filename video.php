<?php
 include('Connection.php');  
 session_start();
  $id = $_GET['variableName'];
   echo $_GET['variableName']; 

     $sql = "SELECT * FROM `computernetwork` where id = '$id'";
     $result = mysqli_query($con, $sql); 
     $num = mysqli_num_rows($result);
       while($row = mysqli_fetch_assoc($result)){

          $url = $row['video'];


          header("location:".$url);
}
?>
