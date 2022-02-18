<?php
foreach ($product_type as $type_itemes) {
?>
    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
        <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-1.jpg">
                <ul class="featured__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="featured__item__text">
                <h6><a href="#"><?= $type_itemes['TenSP'] ?></a></h6>
                <h5><?= $type_itemes['DonGiaBan'] ?></h5>
            </div>
        </div>
    </div>
<?php
}
?>
<div class="text-center">
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">2</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>