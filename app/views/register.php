<?php include '../include/header.php';
      include __APPROOT__.'/app/core/Register.php';
  
  ?>

<body>
<br><br>
 <div class='login'>
<center>
    <?php
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
$reg = new Register();
$count= $reg->CheckEmail($conn,$email);
if($count==0){
   $msg = $reg -> RegisterUser($conn,$_POST);
   echo "<script>alert('".$msg."');
   window.history.back();</script>";

}else{
    echo "<script>alert('User Has Been Exists');
    window.history.back();</script>";
}
    }else{

    
    ?>
    <h1 class='head_name'>Register</h1>
    <span id=disp_error></span>
    <form action='' method="post" class='login_form' id='RegisterUser' onsubmit="return validateRegister();">
    <label>Name</label><br>
    <input type=text name='name' id='name' autocomplete="off" ><br><br>
    <label>Email</label><br>
    <input type='email' name=email id=email autocomplete="off" ><br><br>
    <label>Password</label><br>
    <input type='password' name=pass id=pass autocomplete="off"><br><br>
    <label>Confirm Password</label><br>
    <input type='password' name=cpass  id ='cpass' autocomplete="off" ><br> 
   
    <br>

   
    <input type=submit value='Register' name=submit> &nbsp; &nbsp; &nbsp;
    <input type=reset value='Clear'>
    </form>
    
    <br>
    <a href='forgot_pass.php' id='forgot_pass'>Forgote Password..........!!!!</a><br><br>
    <a href='login.php' id='forgot_pass'>Login</a><br>
    <br>
    <?php
    }
    ?>
</center>

</div>
</body>
<?php include  '../../app/include/footer.php';?>