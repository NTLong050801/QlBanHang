<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div style="margin: 40px;">
                <h4 style="text-align: center;">Đăng nhập</h4>
                <form method="POST" action="http://localhost:88/QlBanHang/index.php?controller=Login&action=checkLogin" id="formLogin">
                    <span id="msgThongBaoLG"></span>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button style="width:100%" type="submit" id="btnLogin" class="btn btn-primary">Đăng nhập</button>
                </form>
                <br>
                <br>
                <span style="color: blue;">Bạn chưa có tài khoản ?</span>
                <span style="color: red;cursor:pointer" id="Register">Đăng ký</span>
            </div>
        </div>
    </div>
</div>


<!-- Đăng ký -->
<div class="modal fade" id="modalResign" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div style="margin: 40px;">
                <h4 style="text-align: center;">Đăng Ký</h4>
                <form action="http://localhost:88/QlBanHang/index.php?controller=Login&action=add_customer" method="POST">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Họ Tên</label>
                        <input required type="text" name="HoTen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Giới tính</label>
                        <input required type="text" name="GioiTinh" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                        <input required type="text" name="DiaChi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input required type="email" id="ipEmail" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <span id="msgThongBao"></span>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input required type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Số Điện Thoại</label>
                        <input required type="text" name="SoDienThoai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#iconLogin').click(function() {
        trangthai = $(this).attr('tt')
        //alert(trangthai)

        if (trangthai == 'Login') {
            $('#modalLogin').modal('show')
            // $('#btnLogin').click(function() {
            //     form = new FormData(formLogin);
            //     $.ajax({
            //         url: "http://localhost:88/QlBanHang/index.php?controller=Login&action=checkLogin",
            //         method: "POST",
            //         data: form,
            //         mimeType: "multipart/form-data",
            //         processData: false,
            //         contentType: false,
            //         success: function(dt) {
            //              $('#msgThongBaoLG').html(dt)
            //              $('#msgThongBaoLG').css("color", "red")
            //         }
            //     })
                
            // })


        } else {
            $.ajax({
                url: "http://localhost:88/QlBanHang/index.php?controller=Login&action=logout",
                method: "POST",
                success: function(dt) {
                    // console.log(dt)
                }
            })
        }


        // console.log(trangthai)
    })
    $('#Register').click(function() {
        $('#modalLogin').modal('hide')
        $('#modalResign').modal('show')
    })
    $('#ipEmail').blur(function() {
        val = $(this).val();
        if (val != '') {
            $.ajax({
                url: "http://localhost:88/QlBanHang/index.php?controller=Login&action=checkEmail",
                method: "POST",
                data: {
                    val: val
                },
                success: function(dt) {
                    // console.log(dt)
                    if (dt == 1) {
                        $('#msgThongBao').html("Có thể sử dụng tài khoản này.")
                        $('#msgThongBao').css("color", "green")
                    } else {
                        $('#msgThongBao').html("Tài khoản này đã được đăng ký.")
                        $('#msgThongBao').css("color", "red")
                    }
                }
            })
        } else {
            $('#msgThongBao').html("")
        }

    })
</script>