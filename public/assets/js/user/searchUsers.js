$('#search').click();
function search(link){
    var key = $('#inputSearch').val();
   // alert(link);
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
error: function(err) {
    alert('Có lỗi xảy ra' + err);
}
});
}
function changeDiscount(key){
	 var val = $('#discount').val();
    //alert(key);
$.ajax({
    url: '/shop/ajaxDiscount',
    type: 'POST',
    cache: false,
    data: {
        aValue: val,
        aKey: key,
// aactive: active
},
success: function(data) {
    $('.change-discount'+key).html(data);
//alert($data);
},
error: function() {
    alert('Có lỗi xảy ra');
}
});
}

