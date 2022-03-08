<?php
if (is_array($datas)) {
    foreach ($datas as $data) {
?>
        <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
            <div class="featured__item">
                <div class="featured__item__pic " style="background-image: url('http://localhost/clothes/public/img/<?= $data['img'] ?>');">    
                    <ul class="featured__item__pic__hover">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="featured__item__text">
                    <h6><a href="#"><?= $data['TenSP'] ?></a></h6>
                    <h5>$<?= $data['DonGiaBan'] ?></h5>
                </div>
            </div>
        </div>
    <?php

    } ?>
<?php
} else {
   echo $datas;
}
?>
