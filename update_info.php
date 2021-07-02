<?php 
session_start();

include('dbconnect.php');
           $name=$_SESSION['uname'];

            $first_name=$_POST['first_name'];
            $last_name=$_POST['last_name'];
            $email=$_POST['email'];

            $mobile=$_POST['mobile'];
          $query =mysqli_query($conn,"update user_info set email='$first_name',address1='$last_name',address2='$email',mobile='$mobile' where first_name='$name'");
          if ($query) {
          	 echo "<script>alert('Update Successfully Completed !!!')</script>";
          }else{
          	echo "not done";
          }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
   <script>
   	self.location = "http://localhost/amazonclone/user_profile.php";

   </script>
 </body>
 </html>