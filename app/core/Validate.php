<?php 
class Validate {
    private $conn;
    private $username ;
    private $password ;
    public $row=0;
    public function __construct($c,$u,$p)
    { //Constructor
        $this->conn;
        $this -> username;
        $this-> password;   
    }
    public function Login($conn,$username,$password){
//validate login
$rs = $conn ->query("select * from tbl_users where email='".$username."'  and password = '".$password."'");
//$rs = $this->conn ->query("call sp_users(3,'1','','".$username."','','','1')");
$count = $rs->num_rows;
$row = $rs->fetch_assoc();
$name = $row['name'];
$role = $row['role'];
 //return $count;

//check for valid
    if($count==1){
        if($row['status']==1){
            return $this->setSession($username,$name,$role);
        }
        else{
            return "not a active account";
        }
        
    }else if($count==0){
       // return false;
    return "invalid username and password";
    }
} 
public function setSession($username, $name,$role){
        $_SESSION['loggedin']=1;
        $_SESSION['user']=$username;
        $_SESSION['name']=$name;
        $_SESSION['type']=$role;
        header('location:redirect.php');
}
public function logout(){
    session_destroy();
}

}
?>