<div class="clear"></div>
<div class="main">
    <?php
    if(isset($_GET['admin'])){
        $tmp = $_GET['admin'];
    }
    else{
        $tmp='';
    }
    if($tmp=='quanlydanhmucsanpham'){
        include("modules/quanlydanhmucsanpham/them.php");
    }
    else{
        include("modules/dashboard.php");
    }
    ?>
</div>
<p>Main Admin</p>

