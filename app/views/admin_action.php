<?php include '../include/header.php';
include __APPROOT__.'/app/core/ManageUser.php';
if(isset($_SESSION['type'])=='admin'){
    $mn  = new ManageUser();
if(isset($_GET['opt'])){
    $opt =  $_GET['opt'];
    if($opt==1)
    {
        $id = $_GET['id'];
        $sts = $_GET['sts'];
        if($_GET['name']==$_SESSION['name']){
            echo"<script>
            alert('You Cannot Change YourSelf');
            window.history.back();
            </script>";
        }else{
            $mn -> Active($conn,$id,$sts);
        }
        
        
    }
    if($opt==2){

    }

}else{
    echo"<script>window.history.back();</script>";
}


}else{
    header('location:login.php');
}
?>
<body>


</body>
<?php include  '../../app/include/footer.php';?>