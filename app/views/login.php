<?php include '../include/header.php';?>
<body>
    <br>
<div class="login">
    <br>
   
<center>
    <h1 class='head_name'>User Login</h1>
    <form action='validate.php' method="post" class='login_form'>
    <label>Username/Email</label><br>
    <input type=email name=username ><br><br>
    <label>Password</label><br>
    <input type=password name=password autocomplete="off"><br><br>
    <input type=submit value='Login'> &nbsp; &nbsp; &nbsp;
    <input type=reset value='Clear'>
    </form>
    <br>
    <!-- <a href='forgot_pass.php' id='forgot_pass'>Forgote Password..........!!!!</a><br><br> -->
    <a href='register.php' id='forgot_pass'>Register</a><br>
    <br>
</center>


</div>

</body>
<?php include  '../../app/include/footer.php';?>