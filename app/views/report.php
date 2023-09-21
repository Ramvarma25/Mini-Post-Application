<?php include '../include/header.php';
include __APPROOT__.'/app/core/Report.php';
error_reporting(0);
?>
<body>
<?php
if($_GET['id']==''&& $_GET['repo']==''){
    echo"<script>
    alert('Invalid Request');
    window.history.back();
    </script>";
}else{
    $repo = new Report();
    $msg = $repo->ReportPost($conn,$_GET['id'],$_GET['repo']);
    if($msg==true){
        echo"<script>
        alert('POST has Been Reported now it  is ADMIN inspection');
        window.history.back();
        </script>";
    }else{
        echo"<script>
    alert('Failed to Report  POST');
    window.history.back();
    </script>";
    }
    

}

?>


</body>
<?php include  '../../app/include/footer.php';?>