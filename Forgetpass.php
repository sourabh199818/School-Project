<?php
session_start();
include_once 'Connection.php';
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $result = mysqli_query($conn,"SELECT * FROM login where email=" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_user_id=$row['email'];
	$email_id=$row['shinubisht345@gmail.com'];
	$password=$row['Bisht@123'];
	if($email==$fetch_email) {
				$to = $email;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: password@studentstutorial.com" . "\r\n" .
                "CC: somebodyelse@example.com";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid userid';
				}
}
?>