<?php include '../include/header.php';
include __APPROOT__.'/app/core/Upload.php';

if(empty($_SESSION)){
  header('location:logout.php');
} 
if($_SESSION['type']!='user'){
//header('location:login.php');

}
?>
<head>
<link rel='text/css' type='stylesheet' href="<?php echo __APPROOT__.'public/css/contents.css'; ?>">
</head>
<body>
<div class="float_name">
 


</div><br><br><br>
<div class="Dashboard">
   <?php if(isset($_POST['submit'])){
     $title = htmlspecialchars($_POST['title']);
     $keyword = htmlspecialchars($_POST['keyword']);
     
     $content = $_POST['description'];
     $post= new Upload();
    $msg = $post ->UploadPost($conn,$title,$keyword,$content,editCSS);
  
echo "<script>alert('".$msg."');
window.location.href = 'DashboardUser.php';

</script>";//

       
   } else {
       ?>
<center>
    <h1 class='head_name'>Upload Post</h1>
    <?php
$upd = new Upload();


    ?>
    <form action='<?php $_SERVER["PHP_SELF"]   ?>' method="post" class='Post_form' id=Post_form onsubmit='return CheckUpload()'>
    <span id=disp_error></span><br>
    <label>Post Title</label><br>
    
    <input type=text name=title id=title ><br><br>

    <label>Search Keywords</label><br>
    <input type=text name=keyword  id=keyword ><br><br>


    <label>The design of page must contain Title and your design it is display as webpage</label>
    <textarea class="form-control" name="description"  id="editor1"></textarea>
              <input type="submit" name="submit" >


 &nbsp; &nbsp; &nbsp;
    <input type=reset value='Clear'>
    </form>
    <br>
    <br>
</center>
<?php
  }
?>
</div>
<script>
  CKEDITOR.replace( 'editor1' );
</script>
</body>
<?php include  '../../app/include/footer.php';?>