$(document).on('click','#btn_add_ctygh',function(){
    $('#Modaltt').html('Thêm Cty Giao Hàng')
    $('#Modal_add_ctygh').modal('show')
})
$(document).on('click','#btn_add_ctgh_succ',function(){
    form = new FormData(myForm_add_ctgh)
    // console.log(form)
 
    $.ajax({
        url: "http://localhost/QlBanHang/index.php?controller=admin&action=add_all",
        method: "POST",
        data: form,
        mimeType: "multipart/form-data",
        processData: false,
        contentType: false,
        success: function (dt) {
            msg(dt)
            load(types)
            $('#Modal_add_ctygh').modal('hide')
            // console.log(dt)
        }
    })
})
$(document).on('click','.delete_ctygh',function(){
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
            url: "http://localhost/QlBanHang/index.php?controller=admin&action=delete_all",
            method: "POST",
            data: {
                IDCty: id,
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
$(document).on('click', '.update_ctygh', function () {
    $('#Modal_add_ctygh').modal('show')
    id = $(this).attr('id');
    $('#Modaltt').html('Sửa Cty Giao Hàng')
    $('#btn_add_ctgh_succ').html('Sửa Công ty')
    // alert(id);
    $.ajax({
        url: "http://localhost/QlBanHang/index.php?controller=admin&action=findByID",
        method: "POST",
        data: {
            IDCty: id,
            types: types
        },
        dataType: "json",
        success: function (dt) {           
            $('#IDCty').attr('value',dt[0]['IDCty']);
            $('#TenCongTy').val(dt[0]['TenCongTy']);
            $('#SoDienThoai').val(dt[0]['SoDienThoai']);
            $('#DiaChi').val(dt[0]['DiaChi']);
            //
        }
    })
    $('#btn_add_ctgh_succ').click(function () {
        form = new FormData(myForm_add_ctgh)
        $.ajax({
            url: "http://localhost/QlBanHang/index.php?controller=admin&action=update_all",
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