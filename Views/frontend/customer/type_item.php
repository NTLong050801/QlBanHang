<div class="d-flex flex-column">
    <div class="d-flex flex-row">
        <?php
        foreach ($product_type as $type_itemes) {
        ?>
            <div class=" col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic " style="background-image: url('http://localhost:88/QLBanHang/public/img/<?= $type_itemes['img'] ?>');">
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
    </div>
    <div class="grid col-xs-1  d-flex justify-content-center pagenation">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item <?php
                                        if ($tranghientai == 1) {
                                            echo 'disabled';
                                        }
                                        ?>" tranghientai=<?php
                                                            if ($tranghientai > 1) {
                                                                echo $tranghientai - 1;
                                                            } else {
                                                                $tranghientai = 1;
                                                                echo $tranghientai;
                                                            }
                                                            ?>>
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li> <?php
                        for ($i = 1; $i <= $tongsotrang_id; $i++) {
                        ?>
                    <li class="page-item <?php
                                            if ($tranghientai == $i) {
                                                echo 'active';
                                            }
                                            ?>" tranghientai=<?= $i ?>><a class="page-link" href="#"><?= $i ?></a></li>
                <?php
                        }
                ?>
                <li class="page-item <?php
                                        if ($tranghientai == $tongsotrang_id) {
                                            echo 'disabled';
                                        }
                                        ?>" tranghientai=<?php if ($tranghientai < $tongsotrang_id) {
                                                                echo $tranghientai + 1;
                                                            } else {
                                                                echo $tongsotrang_id;
                                                            } ?>>
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>