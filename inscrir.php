
<?php
//first get the post variable 
$name=$_POST['myusername'];
$pass=$_POST['password'];
   // include("dbConnect.php");
   // session_start();
$conn=mysqli_connect("localhost","root","");
if(!$conn){

   die('could not '.mysqli_error());
}
  mysqli_select_db($conn, "emplois");
  $query = "INSERT INTO login (User, Pass) values('$name','$pass')";
   if (!mysqli_query($conn, $query)) {
      die("eroor".mysqli_error($conn) );

   } else {
      echo "data";
   }
?>