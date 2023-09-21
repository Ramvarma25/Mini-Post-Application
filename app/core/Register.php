<?php
//include 'Core.php';
class Register{
    public function CheckEmail($conn,$email){
        $rs = $conn->query("Select * from tbl_users where email='".$email."'");
        return $rs->num_rows;  
    }

    public function RegisterUser($conn,$post){
        $name = $post['name'];
        $email = $post['email'];
        $pass = $post['pass'];
        $id = rand(10000,99999999);
        $sql = "insert into tbl_users(id, name, email, password, role, status)values('".$id."','".$name."','".$email."','".$pass."','user',1)";
        if($conn->query($sql)===true){
            return "New User Has Been Register";
        }else{
            return "Unable to register ";
        }
        
    }



    
}


?>
