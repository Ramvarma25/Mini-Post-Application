<?php 
class ResetPass{
public function __construct()
{
    
}
public function SendEmail($email,$name,$pass)
{
    $headers = 'From: ewp.resultportal@gmail.com' . "\r\n".
    'MIME-Version: 1.0' . "\r\n" .
    'Content-Type: text/html; charset=utf-8';
    $topic = "Dear User $name Your Password Has Been Changed ";
    $body ="<h4>Dear User Your  Username  is :<font color=red font-size:30> $email</font> Your New Password is
     <font color=red font-size:30>$pass</font> <br></h4>
    <h1>We recommend You Please Change Your Password After Login</h1>";

if(mail($email,$topic , $body, $headers)){
    return true;
}
else{
return false;
}
   
}
public function Reset($conn,$email){
    $chek = $conn->query("SELECT * from tbl_users where  email= '".$email."' ");
    $count = $chek->num_rows;
    if($count ==1){//email   found
        $row = $chek->fetch_assoc();
        $num = str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);
        $username = $row['email'];
        $name = $row['email'];
        $id = $row['id'];
        $sql = "UPDATE tbl_users set Password = '".$num."' where id = ".$id." and email = '".$email."' ";
        if($conn->query($sql)===true){
            $msg = $this->SendEmail($email,$name,$num);
            if($msg==true){
                return "password Has Been Changed .... You recieved it on Your email shortly";
            }else{
                return "Sorry Try After some Time ";
            }
           
        }
    }else if($count ==0){
        return "Email Not Registred";
    }else{
        return "Unable To reset Password at This Time";
    }
}

}

?>