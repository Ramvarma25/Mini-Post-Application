<html>
    <?php
    session_start();
     include '../config/config.php'; 

     ?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = 'stylesheet' type='text/css' href='<?php echo "".ROOTURL.'/public/css/style.css'; ?>'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!-- <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script> -->
    <script src='<?php echo "".ROOTURL.'/public/js/ckeditor/ckeditor.js'; ?>'></script>
<?php
    if(isset($_SESSION['user'])){
      if($_SESSION['type']=='user'){

?>
<nav class = nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><?php echo SITENAME ;?></label>
      <ul>
        <li><a class="active" href="<?php echo ROOTURL.'/app/views/DashboardUser.php'; ?>">Home</a></li>
        <li><a href="<?php echo ROOTURL.'/app/views/upload.php'; ?>">upload</a></li>
        <li><a href="<?php echo ROOTURL.'/app/views/manage.php'; ?>">manage</a></li>
        <li><a href="<?php echo ROOTURL.'/app/views/profile.php'; ?>">account</a></li>
        <li><a href="<?php echo ROOTURL.'/app/views/logout.php'; ?>">Logout</a></li>
      </ul>
    </nav>
<?php
}else if($_SESSION['type']=='admin'){
//Admin dashbord
?>
<nav class = nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><?php echo SITENAME ;?></label>
      <ul>
        <li><a class="active" href="<?php echo ROOTURL.'/app/views/DashboardAdmin.php'; ?>">Home</a></li>
        <!-- <li><a href="<?php echo ROOTURL.'/app/views/notification.php'; ?>">Notification</a></li> -->
        <li><a href="manage_user.php">Users</a></li>
        <li><a href="<?php echo ROOTURL.'/app/views/profile.php'; ?>">account</a></li>
        <li><a href="<?php echo ROOTURL.'/app/views/logout.php'; ?>">Logout</a></li>
      </ul>
    </nav>
<?php
}
    }else{//not Login
      
        ?>
<nav class = nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><?php echo SITENAME ;?></label>
      <ul>
        <li><a class="active" href="<?php echo ROOTURL.'/app/views/index.php'; ?>">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="<?php echo ROOTURL.'/app/views/login.php'; ?>">Login</a></li>
        <li><a href="upload.php">Information Upload</a></li>

      </ul>
    </nav>
<?php
    }
?>
<head>