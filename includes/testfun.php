<?php
function email_exists($email,$con){
  $row=mysqli_query($con,"SELECT id FROM flipkart WHERE email='$email'");
  if(mysqli_num_rows($row)==1){
    return true;
  }
  else{
    return false;
  }
}

 function logged_in(){
  if(isset($_SESSION['name'])){
    return false;
  }
  else{
    return true;
  }
}
 




?>