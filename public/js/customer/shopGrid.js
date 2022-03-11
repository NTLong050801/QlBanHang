$(document).ready(function(){
    loadSortSP(0, 0);
    $('.filter__sort__select').on('change', function(){
        sortBy = $(this).val();
        loadSortSP(0, sortBy);
    })

})