<?php include '../include/header.php';?>
<body>
<?php 
if(isset($_SESSION['user'])){
   if($_SESSION['type']=='user'){
       header('location:DashboardUser.php');
   }else if($_SESSION['type']=='admin'){
//adminpage
header('location:DashboardAdmin.php');
   }
}else{
    header('location:login.php');
}   
?>

</body>
<?php include  '../../app/include/footer.php';?>