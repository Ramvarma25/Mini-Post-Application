<?php
class Report{
public function ReportPost($conn,$id,$num){
    $report = $num++;
    $sql = "UPDATE tbl_content set report = ".$num." where id = ".$id." ";
    if($conn->query($sql)===true){
       return true;
    }else{
        return false;
    }
}



}



?>