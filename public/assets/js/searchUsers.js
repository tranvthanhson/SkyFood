
function search(link){
    var key = $('#inputSearch').val();
$.ajax({
    url: link,
    type: 'POST',
    cache: false,
    data: {
        ajaxKey: key,
// aactive: active
},
success: function(data) {
    $('.tableSearch').html(data);
//alert($data);
},
error: function() {
    alert('Có lỗi xảy ra');
}
});
}

