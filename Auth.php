<?php 
   include('Connection.php');  
   session_start();
   if (isset($_POST["submit"]))
    $email1 = $_POST['email'];  
    $Password = $_POST['Password'];  

      
        //to prevent from mysqli injection  
        $email1 = stripcslashes($email1);  
        $Password = stripcslashes($Password);  
        $email1 = mysqli_real_escape_string($con, $email1);  
        $Password = mysqli_real_escape_string($con, $Password);  
      
        $sql = "select * from login where email1 = '$email1' and Password = '$Password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 0){  
            echo "<script>alert('Login failed. Invalid username or password.')</script>";
                
                 header('Location:  contact.php'); 
               
        }  
        else{  
              session_start();
              $_SESSION['is_login'] = true;
              $_SESSION['email'] =$email1;
              $_SESSION['username'] = $row['username'];
              echo "welcome". $email['email']; 
              session_start();
              header("location: index.php");
        
               

        }  



    ?>