<?php
class DashboardUser{
    public function CountP($conn, $user){
        $rs = $conn->query("SELECT * from tbl_content where uploader='".$user."' ");
       return $rs->num_rows;
   }
    public function showPost($conn,$user,$start,$end){
        $rs = $conn->query("SELECT * from tbl_content where uploader='".$user."' LIMIT ".$start.", ".$end." ");
        return $rs;
    }
    

    public function SearchCountP($conn, $user,$key){
        $rs = $conn->query("SELECT * from tbl_content where  uploader='".$user."' and title LIKE '%".$key."%' or skeys='%".$key."%'  ");
       return $rs->num_rows;
   }
    public function SearchshowPost($conn,$user,$key,$start,$end){
        $rs = $conn->query("SELECT * from tbl_content where uploader='".$user."' and  title LIKE '%".$key."%' or skeys='%".$key."%'  LIMIT ".$start.", ".$end." ");
        return $rs;
    }
    
    
}//class end 


?>