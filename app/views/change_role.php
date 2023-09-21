<?php include '../include/header.php';
include __APPROOT__.'/app/core/ManageUser.php';
error_reporting(0);

if(empty($_SESSION)){
  header('location:logout.php');
} 

if(isset($_SESSION['type']) ){
  if($_SESSION['type'] !='admin'){
    header('location:logout');
  }
}


?>
<body>
    <br>
    <br>
<div class="login">
    <br>
  <center> <h1 class="heading_name">Confirmation</h1></center>
  <h3>
  <?php
 echo "<br>";
 if($_GET['name']==$_SESSION['name']){
echo "<script>alert('You Cannot Change Yourself');
window.history.back();
</script>";
 }else{
    if(isset($_POST['confirm'])){
        $mn = new ManageUser;
        $mn->Role($conn, $_POST['id'], $_POST['role']);
        
      }else{
        echo"
        Name :-".$_GET['name']."<br>
        ID :-".$_GET['id']."<br>
        new Role :-".$_GET['role']."
          <br><br>";
        ?>
        <form action=Change_role.php method=post>
        <input type= hidden name=id value=<?php echo $_GET['id']  ?>>
        <input type= hidden name=role value=<?php echo $_GET['role']  ?>>
        <center><input type=submit name=confirm value='Change' class=change_btn></center>
        </form>
        <br>
        <?php
      }
 }
  //
  ?>
  </h3>
  


</div>

</body>
<?php include  '../../app/include/footer.php';?>