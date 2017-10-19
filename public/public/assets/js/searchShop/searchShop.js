$('#input').on('keydown',function (e) {
    if(e.which==13){
      $('#searchId').click();
      $(".se-pre-con").fadeIn();;
  }
});

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
        $(".se-pre-con").fadeOut("slow");;

        //alert(link);
    },
    error: function(err) {
        alert('Có lỗi xảy ra' + err);
    }
});
}
