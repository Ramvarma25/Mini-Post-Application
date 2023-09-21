<?php
class DashboardAdmin{

    public function __construct(){

    }
    public function CountP($conn){
        $rs = $conn->query("SELECT * from tbl_content where report !='0' ");
       return $rs->num_rows;
   }
    public function showPost($conn,$start,$end){
        $rs = $conn->query("SELECT * from tbl_content where report !='0' LIMIT ".$start.", ".$end." ");
        return $rs;
    }
    

    public function SearchCountP($conn,$key){
        $rs = $conn->query("SELECT * from tbl_content where title LIKE '%".$key."%' or skeys LIKE '%".$key."%'   ");
       return $rs->num_rows;
   }
    public function SearchshowPost($conn,$key,$start,$end){
        $rs = $conn->query("SELECT * from tbl_content where title LIKE '%".$key."%' or skeys LIKE '%".$key."%'  LIMIT ".$start.", ".$end." ");
        return $rs;
    }

}//class end 


?>