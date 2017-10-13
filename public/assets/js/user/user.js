$('input[type=text]').on('keydown',function (e) {
    if(e.which==13){
        // alert('cc');
        $('#search').click();
    }
});

function checkUsernameAlready(){
    var key = $('#userName').val();
//alert(key);
$.ajax({
    url: '/admin/user/checkUser',
    type: 'POST',
    cache: false,
    data: {
        ajaxKey: key,

    },
    success: function(data) {
        $('.tableSearch').html(data);

    },
    error: function() {
        alert('Có lỗi xảy ra');
    }
});
}
