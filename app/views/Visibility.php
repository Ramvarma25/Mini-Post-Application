<?php include '../include/header.php';

if(isset($_SESSION['user'])){
    $username  = $_GET['username'];
    $id  = $_GET['id'];
    $sts  = $_GET['sts'];
    if($sts =='1'){
        $status = '0';
    }else{
        $status='1';
    }
   // echo $username."<br>".$sts."<br>".$id;

}else{
    header('location:login.php');
}
$sql = "UPDATE tbl_content set status='".$status."' where id =".$id." and uploader='".$username."' ";

if($conn->query($sql)===true){
    echo"
    <script>
        alert('File Mode has Been Changed');
        window.history.back();
    </script>
    ";
}
?>
