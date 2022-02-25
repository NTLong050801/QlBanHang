<?php
foreach ($product_types as $product_type) {
?>
    <div class="card" style="width: 15rem;margin: 5% 15%;">
        <img src="http://localhost/QLbanhang/public/img/<?= $product_type['img'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $product_type['TenSP'] ?></h5>
            <p class="card-text">Giá : <?=  $product_type['DonGiaBan'] ?> 
            <span style="color: red;">x</span>
            SL : <?= $product_type['SoLuongCon'] ?>
        </p>
            <a href="#" class="btn btn-primary detail_sp" idsp = "<?= $product_type['IDSanPham'] ?>">Chi tiết</a>
        </div>
    </div>
<?php
}
?>