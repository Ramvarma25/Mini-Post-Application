<?php include '../include/header.php';

if(isset($_SESSION['user'])){
    $id  = $_GET['fileID'];
    $name  = $_GET['filename'];

  

}else{
    header('location:login.php');
}
$sql = "UPDATE tbl_content set report = '0' where id =".$id."  ";
$conn->error;
if($conn->query($sql)===TRUE){
    echo"
    <script>
        alert('File Mode has Been Changed');
        window.history.back();
    </script>
    ";
}else{
    echo"
    <script>
        alert('Unable to Change File Mode ');
        window.history.back();
    </script>
    ";
}
?>
