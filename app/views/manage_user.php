<?php include '../include/header.php';
include __APPROOT__.'/app/core/ManageUser.php';

if(empty($_SESSION)){
    header('location:logout.php');
  } 
  
  if(isset($_SESSION['type']) ){
    if($_SESSION['type'] !='admin'){
      header('location:logout');
    }
  }

?>
<body>
<div class="float_name">
    <?php echo "ADMIN:".$_SESSION['name'];
 ?>
    
</div>
<br><br><br><br>
<div class="Dashboard">
    <br><br>
    <div class=Search_bar>
    <center>
    <h1 class=head_name>Posts</h1>
    
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class='disp_search_form' method=get>
    <input type=text name='search_key' value="" >&nbsp; &nbsp; &nbsp; <input type=submit value='Search'>
</form></div>
</center>
<table class='show_post'>
<tr>
<th>User ID</th>
<th>Name</th>
<th>Email</th>
<th>Role</th>
<th>Status</th>


</tr>

<?php

$manage = new ManageUser();
if(isset($_GET['search_key'])){
    $key = $_GET['search_key'];
   $pcount = $manage->SearchCountP($conn, $_GET['search_key']);
}else{
    $key = "";
     $pcount = $manage->CountP($conn);
     
}

$number_of_results = $pcount;
$results_per_page = 10;
$number_of_pages = ceil($number_of_results/$results_per_page);
       if (!isset($_GET['page'])) {
           $page = 1;
         } else {
           $page = $_GET['page'];
         }
         $this_page_first_result = ($page-1)*$results_per_page;
         if(isset($_GET['search_key'])){
           $dt =$manage->SearchshowPost($conn,$_GET['search_key'],$this_page_first_result,$results_per_page);  
         }else{
           $dt =$manage->showPost($conn,$this_page_first_result,$results_per_page);   
         }
if($dt->num_rows > 0){
    while($row= $dt->fetch_assoc()){
        if($row['status']==1){
            $st = "Active";
        }else{
            $st = "inactive";
        }
        if($row['role']=='user')
        {
            $newRole = 'admin';
        }
        else{
            $newRole = 'user';
        }
        
        echo "
        <tr class=srows>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td> 
        <td> <a href='change_role.php?opt=2&&id=$row[id]&&role=$newRole&&name=$row[name]' onclick= 'return ChangeRole()' >".$row['role']."</a></td>
       <td><center><a href='admin_action.php?opt=1&&id=$row[id]&&sts=$row[status]&&name=$row[name] ' onclick='return ConfmOffline()' >".$st."</a></center></td>
        ";
    }
}else{
    echo "<tr><th colspan=7>No Users Found<th></tr>";
}
 
//  //print_r($value);
//  for($i = 0; $i <sizeof($value);$i++){

//     }  

?>
</table>
<?php 
echo"<br><br><center>";
if($key==""){
    for ($page=1;$page<=$number_of_pages;$page++) {
        echo '<a href=manage_user.php?page='.$page.' class=pagging>'.$page.'</a> ';
      }
}else{
    for ($page=1;$page<=$number_of_pages;$page++) {
        echo '<a href=manage_user.php?search_key='.$key.'&&page='.$page.' class=pagging>'.$page.'</a> ';
      }
}
        
        echo "<center>";
?>
</div>
<br><br><br>
</body>
<?php include  '../../app/include/footer.php';?>