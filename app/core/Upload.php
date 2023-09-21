<?php

class Upload{

  


public function UploadPost($conn,$title,$keyword,$content,$css){
    $id = rand(100,9999999);
    $file = $id.".html";
    $dec = html_entity_decode($content);
    $user = $_SESSION['user'];
    $dt = date('d/m/Y');
   $stl  = "<link rel=stylesheet href=".$css.">";
   $hed = "<link rel='stylesheet' type='text/css' href='../../public/css/contents.css'>";
   $hed2 = '<link rel=stylesheet  href='.'../../public/css/contents.css'.'>';
   
    if(file_put_contents(FILEPATH.$file,$hed.$dec)){
         $sql ="insert into tbl_content(id,title,skeys,content,filepath,uploader,upload_date,report,status)values('".$id."','".$title."','".$keyword."','".$hed2.$content."','".$file."','".$user."','".$dt."','0','1')";
         if($conn->query($sql)===true){
             return "New Page is Uploaded";
         }else{
            return "unable to Create Page try after some time";
         }
    }else{
        return "page creation failed";
    }
  

}

}
?>