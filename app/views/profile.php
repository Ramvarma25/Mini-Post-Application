<?php include '../include/header.php';
include __APPROOT__.'/app/core/Profile.php';

if(empty($_SESSION)){
    header('location:logout.php');
  } 
  



$prof = new Profile();
      
$data = $prof ->ValidateEmail($conn,$_SESSION['user']);
if($data->num_rows==1){
    $row = $data->fetch_assoc();
    
}else{
echo"<script>
alert('Something got wrong');
window.history.back();
</script>";
}
?>
<body>
    <br>
<div class="login">
    <br>
   
<center>
    <h1 class='head_name'>Profile</h1>
    <span id=disp_error></span><br>
    <?php  
    if(isset($_POST['btn_data'])||isset($_POST['btn_pass'])){
        if(isset($_POST['btn_data']))
        {
             $rt = $prof->checkEmail($conn,$_SESSION['user'],$row['id']);

            if($rt==true){
                $msg = $prof->UpdateProfile($conn,$row['id'],$_POST['uemail'],$_POST['uname']);
                echo"<script>
                alert('".$msg."');
                window.history.back();
                
                </script>";
                       }else{
                        echo"<script>
                        alert('Email is Exists');
                        window.history.back();
                        
                        </script>";
            }

        }else if(isset($_POST['btn_pass'])){
            $msg = $prof->UpdatePassword($conn,$row['id'],$_POST['pass']);
            echo"<script>
                alert('".$msg."');
                window.history.back();</script>";
        }else{
            echo"<script>
alert('Something got wrong try again');
window.history.back();

</script>";
        }

    }else{
if($row['email'] != $_SESSION['user'])
{
    echo "<script>
    alert('You Changed Your email please Login With Your New Email');
    window.location.replace('logout.php');
    </script>";
}
    ?>

<form action=profile.php method=post class=login_form id=profile onsubmit="return CheckProf()">
<input type=hidden name=id value=<?php echo $row['id']; ?> ><br>
Username <br><input type=text name=uemail value=<?php echo $row['email'];  ?> id=uemail><br><br>
Name  <br><input type=text name=uname value=<?php echo $row['name'];  ?> id=uname><br><br>

<input type=submit value='Update'name=btn_data><br>
<br><hr>
</form>
<h1 class='head_name'>Password</h1>
<form action=profile.php method=post class=login_form onsubmit="return CheckPassword()" id=passForm>
<input type=hidden name=id value=<?php echo $row['id']; ?>>
Password <input type=password id=pass name=pass><br><br>
Confirm Password <input type=password id=cpass name=cpass><br><br>

<input type=submit value = 'Change Password' name=btn_pass>

</form>
    <?php
    }
    ?>
    <br>
</center>


</div>

</body>
<?php include  '../../app/include/footer.php';?>