function msg(dt) {
    $('#msg').modal('show');
    $('#text_msg').html(dt)
    setTimeout(function () {
        $('#msg').modal('hide');
    }, 3000)
}
function load(types,id_sp) {
    $.ajax({
        url: "http://localhost/QlBanHang/index.php?controller=admin&action=all"+types+"",
        method:"POST",
        data:{
            IDSanPham : id_sp
        },
        success: function (dt) {
             $('.main-content').html(dt)
            
        }
    })
}
