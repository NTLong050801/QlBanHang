<br>
<br>
<button class="btn btn-success" id="btn_add_sp">Thêm sản phẩm</button>
<br>
<br>
<!-- Example single danger button -->
<div class="form-floating">
    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <label for="floatingSelect">Sắp xếp theo</label>
</div>
<br>
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
            <tr id="tbl" class="<?php 
                if(isset($IDSanPham)){
                    if($IDSanPham == $data['IDSanPham']){
                        echo "table-info";
                    }
                }
            ?>">
                <th scope="row"><?= $i ?></th>
                <td>
                    <img style="width:100px" src="http://localhost/QLbanhang/public/img/product/<?= $data['img'] ?>" alt="">
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
<!-- modal confim -->
<!-- <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #dc5435;color:#fff;text-align: center;border-radius: 20px;">

            <div class="modal-body">
                <h4 id="text_confirm"></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="btn_delete_err">OK (<span id="time_out">5</span>)</button>
                <button type="button" class="btn btn-secondary" id="cancel_delete" data-bs-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-primary" id="btn_delete_succees">Xóa</button>
            </div>
        </div>

    </div>
</div> -->
<!-- Modal -->
<div class="modal fade" id="modalAddSP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Thêm sản phẩm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data" id="myform_adds" name="myform_adds">
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
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn_add_sp_suc">Thêm Sản Phẩm</button>
            </div>
        </div>
    </div>
</div>