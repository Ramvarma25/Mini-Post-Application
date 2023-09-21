<?php
class ManageUser{

    public function __construct(){

    }
    public function CountP($conn){
        $rs = $conn->query("SELECT * from tbl_users  ");
       return $rs->num_rows;
   }
   public function SearchCountP($conn,$key){
    $rs = $conn->query("SELECT * from tbl_users where name LIKE '%".$key."%' or email LIKE'%".$key."%'  ");
   return $rs->num_rows;
}

public function showPost($conn,$start,$end){
    $rs = $conn->query("SELECT * from tbl_users   LIMIT ".$start.", ".$end." ");
    return $rs;
}

public function SearchshowPost($conn,$key,$start,$end){
    $rs = $conn->query("SELECT * from tbl_users where name LIKE '%".$key."%' or email LIKE'%".$key."%'  LIMIT ".$start.", ".$end." ");
    return $rs;
}
public function Active($conn, $id,$sts){
   if($sts=='1'){
       $status=0;
   }else{
       $status=1;
   }
   if($status==1){
       $msg = 'Activated';
   }else{
       $msg = 'Inactivated';
   }
   $sql = "UPDATE tbl_users set status='".$status."' where id = '".$id."' ";
   if($conn->query($sql)===true){
       echo"<script>alert('User has Been ".$msg."')</script>";
       echo"<script>window.history.back()</script>";
   }

}
public function Role($conn, $id,$role){
    $sql = "UPDATE tbl_users set role='".$role."' where id = '".$id."' ";
    if($conn->query($sql)===true){
        echo"<script>alert('User Role  has Been Change to : ".$role."')</script>";
        echo"<script>window.history.back()</script>";
    }
 
 }

}//class end 


?>