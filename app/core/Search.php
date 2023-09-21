<?php
class Search{

    public function __construct(){

    }

    public function exploadKey($keywords)
    {
        $where = "";
        // //remove extra spaces
        $keywords = explode(" ",$keywords);
        // $k = preg_split("/[s]+/",$keywords);
        $total_keywords = count($keywords);
        foreach($keywords as $key => $keyword)
        {
            $where .=" '%$keyword%'";
            if($key != $total_keywords -1)
            {
                $where .= " OR  ";
            }
        }
         return $where." and status = 1";
    }

    public function SearchCount($conn,$keywords)
    {
        $where = $this->exploadKey($keywords);
        $sql = "select * from tbl_content where skeys LIKE $where or title LIKE $where";
        if($rs = $conn->query($sql))
        {
            return $rs->num_rows;
        }
        else
        {
            return $conn->error;
         }
    }
public function SearchKey($conn,$keywords,$start,$end)
    {
        $where = $this->exploadKey($keywords);
        $sql = "select * from tbl_content where skeys LIKE $where LIMIT ".$start." , ".$end." ";
        if($rs = $conn->query($sql))
        {
            return $rs;
        }
        else
        {
            return $conn->error;
         }
    }
    
}


?>