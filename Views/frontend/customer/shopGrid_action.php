<div class="row">
    <?php
    foreach ($getAllSPshop as $getAllSPshops) {
    ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" style="background-image: url(http://localhost/QlBanHang/public/img/product/<?= $getAllSPshops['img'] ?>);">
                    <ul class="product__item__pic__hover">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><a href="#"><?= $getAllSPshops['TenSP'] ?></a></h6>
                    <h5 class="product__item__price"><?= $getAllSPshops['DonGiaBan'] ?></h5>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<div class="product__pagination">
    <?php
    if (isset($_POST['current_page'])) {
        $current_page = $_POST['current_page'];
    } else {
        $current_page = 1;
    }
    for ($i = 1; $i <= $soTrang; $i++){
    ?>
        <a href="#"><?= $i ?></a>
    <?php
    }
    ?>
    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
</div>