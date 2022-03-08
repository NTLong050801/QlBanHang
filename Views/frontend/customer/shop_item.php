<div class="d-flex flex-row flex-wrap">
<?php   //fillter_product categories_item
foreach ($categories_item as $allSanPhams) {
?>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="product__item">
            <div class="product__item__pic set-bg" style="background-image: url('http://localhost/QlBanHang/public/img/<?= $allSanPhams['img'] ?>');" data-setbg=>
                <ul class="product__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="#"><?= $allSanPhams['TenSP'] ?></a></h6>
                <h5><?= $allSanPhams['DonGiaBan'] ?></h5>
            </div>
        </div>
    </div>
<?php
}
?>
</div>

</div>
<div class="product__pagination">
    <a href="#" trang="<?php if ($Tranghientai <= 1) {
                            echo "1";
                        } else {
                            echo $Tranghientai - 1;
                        } ?>"><i class="fa fa-long-arrow-left"></i></a>
    <?php
    for ($i = 1; $i <= $total_page; $i++) {
    ?>
        <a trang="<?= $i ?>" href="#"><?= $i ?></a>
    <?php
    }
    ?>
    <a href="#" trang="<?php if ($Tranghientai == $total_page) {
                            echo $total_page;
                        } else {
                            echo $Tranghientai + 1;
                        }
                        ?>"><i class="fa fa-long-arrow-right"></i></a>
</div>
<div IDLoaiHang="<?= $IDLoaiHang ?>" class="id_category" action="<?php
    if(isset($price_min))
    {
        echo "search";
    }else 
    {
        echo "none";
    }
?>">


</div>