// $('#search').click();
function search(link){
     var key = $('#input').val();
     var type = $('#type').val();
     var sortBy = $('#sortBy').val();
    $.ajax({
        url: link,
        type: 'GET',
        cache: false,
        data: {
            ajaxKey: key,
            type: type,
            sortBy: sortBy
        // active: active
    },
    success: function(data) {
        $('.searchShopTable').html(data);
        //alert(link);
    },
    error: function(err) {
        alert('Có lỗi xảy ra' + err);
    }
    });
}
