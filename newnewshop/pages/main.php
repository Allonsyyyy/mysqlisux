<div id="main">
    <?php
    include("sidebar/sidebar.php")
    ?>
    <div class="product">
        <?php
        if(isset($_GET['quanly'])){
            $tmp = $_GET['quanly'];
        }
        else{
            $tmp='';
        }
        if($tmp=='danhmucsanpham'){
            include("main/danhmuc.php");
        }
        elseif($tmp=='giohang'){
            include("main/giohang.php");
        }
        elseif($tmp=='baiviet'){
            include("main/baiviet.php");
        }
        elseif($tmp=='lienhe'){
            include("main/lienhe.php");
        }
        else{
            include("main/index.php");
        }
        ?>
    </div>
</div>