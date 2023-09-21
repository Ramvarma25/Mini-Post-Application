<?php
  include '../config/config.php'; 
echo"<link 'rel=text/css' type=stylesheet href=". ROOTURL.'/public/css/contents.css'.">";
if($_GET['filepath']==""){
   // header('location:index.php');
   echo "blank";
}else{
    include $_GET['filepath'];
}



?>