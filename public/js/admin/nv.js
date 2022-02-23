$(document).on('click', '#btn_add_nv', function () {
    $('#Modal_add_nv').modal('show')
    $('#Modaltt').html('Thêm Nhân Viên')
})
$(document).on('click', '#btn_add_nv_succ', function () {
    form = new FormData(myForm_add_nv)
    // console.log(form)

    $.ajax({
        url: "http://localhost:88/QLbanhang/index.php?controller=admin&action=add_all",
        method: "POST",
        data: form,
        mimeType: "multipart/form-data",
        processData: false,
        contentType: false,
        success: function (dt) {
            msg(dt)
            load(types)
            $('#Modal_add_nv').modal('hide')
            //  console.log(dt)
        }
    })
})
$(document).on('click', '.delete_nv', function () {
    id = $(this).attr('id');
    // alert(id)
    $('#confirm').modal('show');

    id = $(this).attr('id');
    $('#text_confirm').html('Bạn chắc chắn muốn xóa sản phẩm này ?');
    $('#btn_delete_err').css("display", "none")
    $('#cancel_delete').css("display", "block")
    $('#btn_delete_succees').css("display", "block")
    $('#btn_delete_succees').click(function () {
        $.ajax({
            url: "http://localhost:88/QLbanhang/index.php?controller=admin&action=delete_all",
            method: "POST",
            data: {
                IDNhanVien: id,
                types: types
            },
            success: function (dt) {
                msg(dt)
                load(types)
                $('#confirm').modal('hide');
            }
        })

    })
})

$(document).on('click', '.update_nv', function () {
    $('#Modal_add_nv').modal('show')
    id = $(this).attr('id');
    $('#Modaltt').html('Sửa Nhân Viên')
    $('#btn_add_nv_succ').html('Sửa Nhân viên')
    // alert(id);
    $.ajax({
        url: "http://localhost:88/QLbanhang/index.php?controller=admin&action=findByID",
        method: "POST",
        data: {
            IDNhanVien: id,
            types: types
        },
        dataType: "json",
        success: function (dt) {
            $('#IDNhanVien').attr('value', dt[0]['IDNhanVien']);
            $('#HoTen').val(dt[0]['HoTen']);
            $('#NgaySinh').val(dt[0]['NgaySinh']);
            GioiTinh = dt[0]['GioiTinh'];
            if (GioiTinh == 'Nam') {
                $('.GioiTinh_Nam').prop('checked',true);
            }else{
                $('.GioiTinh_Nu').prop('checked',true);
            }
            $('#NgayBatDauLam').val(dt[0]['NgayBatDauLam']);
            $('#DiaChi').val(dt[0]['DiaChi']);
            $('#Email').val(dt[0]['Email']);
            $('#SoDienThoai').val(dt[0]['SoDienThoai']);

        }
    })
    $('#btn_add_nv_succ').click(function () {
        form = new FormData(myForm_add_nv)
        $.ajax({
            url: "http://localhost:88/QLbanhang/index.php?controller=admin&action=update_all",
            method: "POST",
            data: form,
            mimeType: "multipart/form-data",
            processData: false,
            contentType: false,
            success: function (dt) {
                msg(dt)
                load(types)
                $('#modalAddSP').modal('hide')
            }
        })
    })
})