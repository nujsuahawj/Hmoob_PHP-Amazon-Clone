  <?php
  session_start();
   include('dbconnect.php');
   if (isset($_POST['submit'])) {
              $title=$_SESSION['uname'];
     $image_name=$_FILES['image']['name'];
      $temp=$_FILES['image']['tmp_name'];

       move_uploaded_file($temp, "profile/$image_name");
 	 $query=mysqli_query($conn,"insert into profile_pic(name,image)values('$title','$image_name')");
 	if ($query) {
 		  echo "<script>alert('Your Profile Picture Updated')</script>";
 		 
 	}else{
 		echo "File not upload";
 	}
         }
   ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
   	<meta charset="UTF-8">
   	<title>Document</title>
   </head>
   <body>
   	<script>
   		self.location = "http://localhost/amazonclone/user_profile.php";
   	</script>
   </body>
   </html>