<?php include '../include/header.php';
include __APPROOT__.'/app/core/DashboardAdmin.php';
?>
<body>
<div class="float_name">

    <?php
    if(!isset($_SESSION)){
      //logout
      header('location:logout.php');
    }else if($_SESSION['type'] != 'admin'){
      //logout
      header('location:logout.php');
    }
    echo "ADMIN:".$_SESSION['name'];
    
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
<th>Post ID</th>
<th>Title</th>
<th>keys</th>
<th>view</th>
<th>Status</th>
<th>Delete</th>
<th>Reports</th>
</tr>

<?php

$uDash = new DashboardAdmin();
if(isset($_GET['search_key'])){
    $key = $_GET['search_key'];
   $pcount = $uDash->SearchCountP($conn, $_GET['search_key']);
}else{
    $key = '';
     $pcount = $uDash->CountP($conn);
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
           $dt =$uDash->SearchshowPost($conn,$_GET['search_key'],$this_page_first_result,$results_per_page);  
         }else{
           $dt =$uDash->showPost($conn,$this_page_first_result,$results_per_page);   
         }
if($dt->num_rows > 0){
    while($row= $dt->fetch_assoc()){
        if($row['status']==1){
            $st = "Live";
        }else{
            $st = "Offline";
        }
        echo "
        <tr class=srows>
        <td>".$row['id']."</td>
        <td>".$row['title']."</td>
        <td>".$row['skeys']."</td>
        <td><a href=".FILEVPATH.$row['filepath'].">".$row['filepath']."</a></td>
        <td><a href='Visibility.php?id=$row[id]&&username=$_SESSION[user]&&sts=$row[status]' onclick='return ConfmLive();' >".$st."</a></td>
        <td><a href='remove.php?fileID=$row[id]&&filename=$row[filepath]' onclick='return ConfmDel();' >Remove</a></td>
        <td><center><a href='remove_report.php?fileID=$row[id]&&filename=$row[filepath]' onclick='return ConfmRepo();' >".$row['report']." Reports </a><center></td>
        </tr>
        ";
    }
}else{
    echo "<tr><th colspan=7>No Reported Post Found<th></tr>";
}
 
//  //print_r($value);
//  for($i = 0; $i <sizeof($value);$i++){

//     }  

?>
</table>
<?php 
echo"<br><br><center>";
        for ($page=1;$page<=$number_of_pages;$page++) {
            echo '<a href=DashboardAdmin.php?search_key='.$key.'&&page='.$page.' class=pagging>'.$page.'</a> ';
          }
        echo "<center>";
?>
</div>
<br><br><br>
</body>
<?php include  '../../app/include/footer.php';?>