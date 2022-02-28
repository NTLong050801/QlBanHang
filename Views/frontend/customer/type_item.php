

<?php
foreach ($product_type as $type_itemes) {
?>
    <div class=" col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
        <div class="featured__item">
            <div class="featured__item__pic " style="background-image: url('http://localhost/clothes/public/img/<?= $type_itemes['img'] ?>');">
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
<<<<<<< Updated upstream
<div class="grid col-xs-1  d-flex justify-content-center pagenation">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li> <?php
                    for ($i = 1; $i <= $tongsotrang_id; $i++) {
                    ?>
                <li trang="<?= $i ?>" class="page-item"><a class="page-link" href="#"><?= $i ?></a></li>
            <?php
                    }
            ?>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
=======
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <?php
        for ($i = 1; $i <= $tongsotrang; $i++) { ?>
            <li class="page-item"><a class="page-link" href="#"><?= $i ?></a></li>
        <?php
        }
        ?>

        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>
>>>>>>> Stashed changes
