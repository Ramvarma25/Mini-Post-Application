<?php
include '../include/header.php';
 include __APPROOT__.'/app/core/Validate.php';
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
if($username !='' && $password !=''){
    
    $vd = new Validate ($conn,$username,$password);
    //check login
   $count= $vd->Login($conn,$username,$password);
//echo "$count";
echo"<script>
alert('".$count."');
window.history.back();
</script>";



}else{
    header('location:login.php');
}
    


   

 }else{
    header('location:login.php');
}


?>