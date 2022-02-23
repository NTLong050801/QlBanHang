function msg(dt) {
    $('#msg').modal('show');
    $('#text_msg').html(dt)
    setTimeout(function () {
        $('#msg').modal('hide');
    }, 3000)
}
function load(types) {
    $.ajax({
        url: "http://localhost:88/QLbanhang/index.php?controller=admin&action=all"+types+"",
        success: function (dt) {
            $('.main-content').html(dt)
        }
    })
}
