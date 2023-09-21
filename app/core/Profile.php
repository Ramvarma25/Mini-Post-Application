<?php  
class Profile{
    public function __construct(){

    }
    public function ValidateEmail($conn,$username){
        $sql = $conn->query("SELECT * from tbl_users where email='".$username."' ");
       return $sql;
    }
    public function checkEmail($conn,$username,$id)//Check Email Taken or not
    {
        $sql = $conn->query("SELECT * from tbl_users where email='".$username."' and id!=".$id." ");
        $row = $sql->num_rows;
        if($row==0){
            return true;
        }else{
            false;
        }
    }
    public  function UpdateProfile($conn,$id,$email,$name){
        $sql =  "UPDATE tbl_users set email = '".$email."' , name= '".$name."' where id= ".$id." ";
        if($conn->query($sql)===true){
            return "Profile Has Been Updated";
        }else{
            return "Failed to Update Profile";
        }
    }
    public  function UpdatePassword($conn,$id,$pass){
        $sql =  "UPDATE tbl_users set password = '".$pass."'  where id= ".$id." ";
        if($conn->query($sql)===true){
            return "Password Has Been Changed";
        }else{
            return "Failed to Changed Password";
        }
    }
}
?>