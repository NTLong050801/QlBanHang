<?php
foreach ($product_type as $type_itemes) {
?>
    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
        <div class="featured__item">
            <div class="featured__item__pic " style="background-image: url('http://localhost/clothes/public/img/<?=$type_itemes['img']?>');">
                <ul class="featured__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="featured__item__text">
                <h6><a href="#"><?= $type_itemes['TenSP'] ?></a></h6>
                <h5 class="DonGiaBan"><?= $type_itemes['DonGiaBan'] ?></h5>
            </div>
        </div>
    </div>
<?php
}
?>
