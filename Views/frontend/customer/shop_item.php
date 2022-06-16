<?php
foreach ($allSanPham as $allSanPhams) {
?>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="product__item">
            <div class="product__item__pic set-bg" style="background-image: url('http://localhost:88/QlBanHang/public/img/<?= $allSanPhams['img'] ?>');">
                <ul class="product__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="http://localhost:88/QlBanHang/index.php?controller=details&IDSP=<?=$allSanPhams['IDSanPham']?>"><?= $allSanPhams['TenSP'] ?></a></h6>
                <h5><?= $allSanPhams['DonGiaBan'] ?></h5>
            </div>
        </div>
    </div>
<?php
}
?>
<div class="product__pagination pagination">
    <a href="#" style="<?php
                        if ($tranghientai == 1) {
                            echo 'display:none';
                        }
                        ?>" tranghientai="<?php
                                            if ($tranghientai <= 1) {
                                                echo '1';
                                            } else {
                                                echo $tranghientai - 1;
                                            }
                                            ?>"><i class="fa fa-long-arrow-left"></i></a>
    <?php
    for ($i = 1; $i <= $total_page; $i++) {
    ?>
        <a class="<?php
                    if ($tranghientai == $i) {
                        echo 'bg-primary';
                    }
                    ?>" tranghientai=<?= $i ?> href="#"><?= $i ?></a>
    <?php
    }
    ?>

    <a style="<?php
                if ($tranghientai == $total_page) {
                    echo 'display:none';
                }
                ?>" href="#" tranghientai="<?php
                                            if ($tranghientai == $total_page) {
                                                echo $total_page;
                                            } else {
                                                echo $tranghientai + 1;
                                            }
                                            ?>"><i class="fa fa-long-arrow-right"></i></a>
</div>



<div id="get_idlh" IDLH="<?php
    if(isset($IDLH)){
        echo $IDLH;
    }else{
        echo 'none';
    }
?>" IDNCC="<?php
    if(isset($IDNCC)){
        echo $IDNCC;
    }else{
        echo 'none';
    }
?>" price_min="<?php
                                                    if (isset($price_min)) {
                                                        echo $price_min;
                                                    } else {
                                                        echo 'none';
                                                    }
                                                    ?>" price_max="<?php
                                                                    if (isset($price_min)) {
                                                                        echo $price_max;
                                                                    }
                                                                    ?>"></div>