
<!DOCTYPE html>
<html>
<head>
  <title>PHP Tutorial</title>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    
</head>
<body>
<?php 
$a  ="<html><head><body></body></html>";
if(isset($_POST['description'])){
    $description=$_POST['description'];
    $hed = "<link rel='stylesheet' type='text/css' href='../../public/css/contents.css'>";
      echo $hed.$description;
    //echo  $description;
}else{
    ?>



        <h2>PHP Tutorial</h2>
        <hr>
        <form method="post" action="">
          
              <textarea class="form-control" name="description" required id="editor1"><?php echo $a;   ?></textarea>
              <input type="submit" name="submit" class="btn btn-primary">
            
       
</body>
<script>
  CKEDITOR.replace( 'editor1' );
</script>
<?php
}
?>
</html>