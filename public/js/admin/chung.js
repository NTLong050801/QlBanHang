url = "http://localhost:88/QLBanHang/index.php?";
function msg(dt) {
    $('#msg').modal('show');
    $('#text_msg').html(dt)
    setTimeout(function () {
        $('#msg').modal('hide');
    }, 3000)
}
function load(types, id_sp) {
    $.ajax({
        url: url+"controller=admin&action=all" + types,
        method: "POST",
        data: {
            IDSanPham: id_sp,   
        },
        success: function (dt) {
             $('.main-content').html(dt)
            //console.log(dt)
            

        }
    })
}
function load_toast(content) {
    $('#liveToast').toast('show')
    $('.toast-body').html(content);
    setTimeout(function () {
        $('#liveToast').toast('hide')
    }, 2000)
}


