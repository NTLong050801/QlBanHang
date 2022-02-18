<?php
$idLH = $_POST['idLH'];
foreach ($getAllSP as $product) {
?>
    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
        <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="http://localhost/QlBanHang/public/img/product/<?php echo $product['img'] ?>">
                <ul class="featured__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="featured__item__text">
                <h6><a href="#"><?php echo $product['TenSP'] ?></a></h6>
                <h5><?php echo $product['DonGiaBan'] ?></h5>
            </div>
        </div>
    </div>
<?php
}
?>