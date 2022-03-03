<div class="d-flex flex-row flex-wrap">
    <?php
    foreach ($getProducts as $product) {
    ?>
        <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
            <div class="featured__item">
                <div class="featured__item__pic" data-setbg="">
                    <img src="http://localhost/QlBanHang/public/img/product/<?php echo $product['img'] ?>" alt="" class="set-bg">
                    <ul class="featured__item__pic__hover">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="featured__item__text">
                    <h6><a href="#"><?php echo $product['TenSP'] ?></a></h6>
                    <h5 class="DonGiaBan"><?php echo $product['DonGiaBan'] ?></h5>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>


<?php 
    if(isset($_POST['current_page'])){
        $current_page = $_POST['current_page'];
      }
      else {
        $current_page = 1;
      }
?>
<nav class="d-flex flex-row-reverse" aria-label="...">
    <ul class="pagination">
        <li class="page-item page-previous" idLH = "<?php echo $idLH?>" cr_page = "<?php echo $current_page ?>">
            <a class="page-link">Previous</a>
        </li>
        <?php
         $idLH = $_POST['idLH'];
        for ($i = 1; $i <= $soTrang; $i++) {
        ?>
            <li idLH = "<?php echo $idLH?>" cr_page = "<?= $i ?>" class="page-item page-current page<?= $i?>"><a class="page-link" href="#"><?php echo $i?></a></li>
        <?php          }
        ?>
        <li class="page-item page-next" idLH = "<?php echo $idLH?>" cr_page = "<?= $current_page ?>">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>