<?php include '../include/header.php';
include __APPROOT__.'/app/core/ResetPass.php';
?>
<body>
    <br>
<div class="login">
    <br>
   <?php
    if(isset($_POST['username'])){
        $rpass = new ResetPass();
       $msg = $rpass -> Reset($conn,$_POST['username']);
      echo "<script>alert('".$msg."');
      window.history.back();</script>";
    }else{
   ?>
<center>
    <h1 class='head_name'>User Login</h1>
    <br><span id=disp_error></span><br>
    <form action='forgot_pass.php' method="post" id="forgot_form" class='login_form' onsubmit=" return EmailEmpty()">
    <label>Username/Email</label><br>
    <input type=text name=username id=username autocomplete="off"><br><br>
    <input type=submit value='Reset Password'> &nbsp; &nbsp; &nbsp;

    </form>
    <br>
    <a href='register.php' id='forgot_pass'>Register</a><br><br>
    <a href='login.php' id='forgot_pass'>Login</a><br>
     <br>
</center>

<?php }
?>
</div>

</body>
<?php include  '../../app/include/footer.php';?>