<br>
<br>
<button class="btn btn-success" id="btn_add_sp">Thêm sản phẩm</button>
<br>
<br>
<!-- Example single danger button -->
<div>
    <div class="col-4" style="float: left;">
        <div class="form-floating">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">

                <option class="option_val" value="0" <?php
                                                        if ($IDLoaiHang == 0) {
                                                            echo 'selected';
                                                        }
                                                        ?>>All</option>
                <?php
                foreach ($loaihangs as $loaihang) {
                ?>
                    <option class="option_val" <?php
                                                if ($IDLoaiHang == $loaihang['IDLoaiHang']) {
                                                    echo 'selected';
                                                }
                                                ?> value="<?= $loaihang['IDLoaiHang'] ?>"><?= $loaihang['TenLoaiHang'] ?></option>
                <?php
                }
                ?>
            </select>
            <label for="floatingSelect">Lọc theo loại hàng</label>
        </div>
    </div>
    <div class="col-8" style="float: right;">
        <div class="input-group mb-3" style="height: 58px;">
            <input type="text" id="ip_search" class="form-control border border-danger rounded-start" placeholder="Tím kiếm sản phẩm" aria-label="Tím kiếm sản phẩm" aria-describedby="button-addon2">
            <button class="btn btn-outline-success " type="button" id="btn_search">Tím kiếm</button>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<?php
if (is_array($datas)) {
?>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col"> STT</th>
                <th scope="col">Tên SP</th>
                <th scope="col">Tên NCC</th>
                <th scope="col">Tên Loại Hàng</th>
                <th scope="col">Đơn giá nhập</th>
                <th scope="col">Đơn giá bán</th>
                <th scope="col">Số lượng còn</th>
                <th scope="col">Mô Tả</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($datas as $data) {
            ?>
                <tr id="<?php
                        if (isset($IDSanPham)) {
                            if ($IDSanPham == $data['IDSanPham']) {
                                echo "tbl";
                            }
                        }
                        ?>" class="<?php
                                    if (isset($IDSanPham)) {
                                        if ($IDSanPham == $data['IDSanPham']) {
                                            echo "table-primary";
                                        }
                                    }
                                    ?>">
                    <th scope="row"><?= $i ?></th>
                    <td>
                        <img style="width:100px" src="http://localhost:88/QLbanhang/public/img/<?= $data['img'] ?>" alt="">
                        <?= $data['TenSP'] ?>
                    </td>
                    <td><?= $data['TenCongTy'] ?></td>
                    <td><?= $data['TenLoaiHang'] ?></td>
                    <td><?= $data['DonGiaNhap'] ?></td>
                    <td><?= $data['DonGiaBan'] ?></td>
                    <td><?= $data['SoLuongCon'] ?></td>
                    <td><?= $data['MoTaSP'] ?></td>
                    <td><button class="btn btn-warning update_sp" id="<?= $data['IDSanPham'] ?>">Sửa</button></td>
                    <td><button class="btn btn-danger delete_sp" id="<?= $data['IDSanPham'] ?>">Xóa</button></td>
                </tr>
        <?php
                $i++;
            }
        ?>


        </tbody>
    </table>
<?php
}else{
    echo '<span style="text-align:center;color:red;margin:40%">Không tìm thấy sản phẩm</span>';
    // echo '123';
}
?>

    <!-- Modal -->
    <div class="modal fade" id="modalAddSP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="POST" enctype="multipart/form-data" id="myform_adds" name="myform_adds">

                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Thêm sản phẩm</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">
                        <div class="col-6" style="float: left;">
                            <input type="text" value="" hidden name="IDSanPham" id="IDSanPham">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tên SP</label>
                                <input require type="text" class="form-control" id="TenSP" name="TenSP" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tên Loại Hàng</label>
                                <br>
                                <select name="IDLoaiHang" id="IDLoaiHang">
                                    <?php
                                    foreach ($loaihangs as $loaihang) {
                                    ?>
                                        <option value="<?= $loaihang['IDLoaiHang'] ?>"><?= $loaihang['TenLoaiHang'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tên NCC</label>
                                <br>
                                <select name="IDNhaCungCap" id="IDNhaCungCap">
                                    <?php
                                    foreach ($nccs as $ncc) {
                                    ?>
                                        <option value="<?= $ncc['IDNhaCungCap'] ?>"><?= $ncc['TenCongTy'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Đơn giá nhập</label>
                                <input require type="number" id="DonGiaNhap" class="form-control" name="DonGiaNhap" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Đơn giá bán</label>
                                <input require type="number" id="DonGiaBan" class="form-control" name="DonGiaBan" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-6" style="float: left;">

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Số lượng còn</label>
                                <input require type="number" id="SoLuongCon" class="form-control" name="SoLuongCon" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea id="MoTaSP" require class="form-control" placeholder="Leave a comment here" name="MoTaSP" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Mô tả</label>
                                </div>
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Ảnh</label>
                                <input require type="file" class="form-control" name="img" aria-describedby="emailHelp">
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <br>
                        <br>
                        <br>
                        <br>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="btn_add_sp_suc">Thêm Sản Phẩm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
