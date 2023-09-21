
<?php include '../include/header.php';
include __APPROOT__.'/app/core/Search.php';
error_reporting(0);//error_repring 0 some time flash scrren of empty key warning
if($_GET['search_key']==""){
  header('location:index.php');
}
?>
<body>
    <br>
    <div class=Display>
<br>
    
    <center><div class=Search_bar>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class='disp_search_form' method=get>
    <input type=text name='search_key' value="<?php echo $_GET['search_key']; ?>" >&nbsp; &nbsp; &nbsp; <input type=submit value='Search'>
</form></div><br></center>
<?php if(isset($_GET['search_key'])){
        $s = new Search();
        
        $count = $s->SearchCount($conn, $_GET['search_key']);
        $sk = $_GET['search_key'];
        
        //pagination declaration
        $number_of_results = $count;
        $results_per_page = 10;
        $number_of_pages = ceil($number_of_results/$results_per_page);
        if (!isset($_GET['page'])) {
            $page = 1;
          } else {
            $page = $_GET['page'];
          }
          $this_page_first_result = ($page-1)*$results_per_page;
          $data = $s->SearchKey($conn, $_GET['search_key'],$this_page_first_result,$results_per_page);
          //LIMIT ' . $this_page_first_result . ',' .  $results_per_page
        if($data->num_rows > 0){//dispay Result
          echo "<br><h3 class='squery'>we Found Records " .$count ." for you for query<br>".$_GET['search_key']."</h3><br><hr><br>";
            while($row = $data->fetch_assoc()){//data found
                echo"
                <div class='results'>
                <center><a href='".FILEVPATH.$row['filepath']."'><h3 class='disp_result'>".$row['title']."</h3></a></center>
                <span class=dateUpload>Uploaded By :".$row['uploader']." " . ". Upload Date : ".$row['upload_date']."</span>
                <span class=disp_report><a href='report.php?id=$row[id]&&repo=$row[report]' onclick='return ConfReport()'>Report to this post</a></span>
                </div>
                <br>
                ";
            }

        }else{
          echo "<br><h3 class='squery'>No Records Found on This Search query:".$_GET['search_key']."</h3>";
        }
        echo"<br><br><center>";
        for ($page=1;$page<=$number_of_pages;$page++) {
            echo '<a href=Display.php?search_key='.$sk.'&page='.$page.' class=pagging>'.$page.'</a> ';
          }
        echo "<center>";
        //print_r($data);
    }else{
      echo"<script>window.history.back()</script>";
    }
?>


</div>
</body>
<?php include  '../../app/include/footer.php';?>
