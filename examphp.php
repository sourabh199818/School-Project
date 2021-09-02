<?php
 include('Connection.php');  
 session_start();
  $id = $_GET['variableName'];

     $sql = "SELECT * FROM `subject` where id = '$variableName'";
     $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

           if($count == 1){  
            echo "<script>alert('No exam Test today.')</script>";
                
                 }  
        else{  
              header("location: index.php");


}
?>
