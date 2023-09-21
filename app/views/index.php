<?php include '../include/header.php';
include __APPROOT__.'/app/core/Search.php';

?>
<body>
    <br><br><br><br><br>
    <div class="search_frame">
        <center>
            <br>
        <h1 class='search_heading'>Search Box</h1><br>
        <form action="Display.php" method=get id=search_form  onsubmit = 'return checkSearch()'>
        <input type="text" class="search_box" id =search_key  name="search_key" placeholder="Search" autocomplete="off" >
<br><br>
<input type=submit class ='btn-search' name="Search">

        </center>
    </form>
    </div>
</body>
<?php include  '../../app/include/footer.php';?>
