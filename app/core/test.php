<?php
$conn=mysqli_connect("localhost","root","","sql_retrival");
$username = 'test@test.com';
$result ="call test($username)";
if($conn->query($result)===true)
{

}else{
    echo"failed" .$conn->connect_error;
}

?>