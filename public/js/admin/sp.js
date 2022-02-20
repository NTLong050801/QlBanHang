$(document).on('click','#btn_add_sp',function(){
    $('#modalAddSP').modal('show')
})
types = 'sanpham';
$(document).on('click','#btn_add_sp_suc',function(){
    form = new FormData(myform_adds)
    $.ajax({
        url:"http://localhost:88/QLbanhang/index.php?controller=admin&action=addsp",
        method:"POST",
        data:form,
        mimeType: "multipart/form-data",
        processData: false,
        contentType: false,
        success:function(dt){
            msg(dt)
            load(types)
            $('#modalAddSP').modal('hide')
        }
    })
})
