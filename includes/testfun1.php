<?php
function email_exists($email,$con){
   $row=mysqli_query($con,"SELECT id FROM newtest WHERE email='$email'");
   if(mysqli_num_rows($row)==1){
      return true;
   }
   else{
      return false;
   }
}
function logged_in(){
   if(isset($_SESSION['dob']) ||isset($_COOKIE['suvendu'])){
      return false;
   }
   else{
      return true;
   }
}
 

?>