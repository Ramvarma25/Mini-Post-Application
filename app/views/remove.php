<?php include '../include/header.php';
error_reporting(0);

if(isset($_SESSION['user'])){
$id = $_GET['fileID'];
$file = $_GET['filename'];
if(unlink('../../public/pages/'.$file)){
    $sql = "DELETE from tbl_content where id='".$id."' and filepath = '".$file."' ";
    if($conn->query($sql)){
        echo "<script>alert('File Removed');</script>";
        echo "<script>window.history.back();</script>";
    }else{
        echo "<script>alert('Unable to Remove file');</script>";
        echo "<script>window.history.back();</script>";
    }

}else{
       echo "<script>alert('Page Not Found for remove');</script>";
        echo "<script>window.history.back();</script>";
}

}else{
    echo "<script>window.location.replace('login.php');</script>";
}

 include  '../../app/include/footer.php';?>