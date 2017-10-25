$('#comment').on('keydown',function (e) {
    if(e.which==13){

        $('#btnSend').click();
    }
});
function saveAjax(link,id,check){
	$(".se-pre-con").fadeIn();
   $.ajax({
        url: link,
        type: 'POST',
        cache: false,
        data: {
           aid:id,

        },
        success: function(data) {
          $(".se-pre-con").fadeOut();
            $('#save').html(data);
            if(check==0){
             $('#displaySaved').html('<div class="ribbon bookmark" ><p><span>Saved</span></p></div>');
            }

           else{
              $('#displaySaved').html('');
           }
           // alert(check);
          // $('#displaySaved').html(check);
        },
        error: function(err) {
            alert('Có lỗi xảy ra' + err);
        }
    });
}

function loadMyComments(id){
  if($('#comment').val().trim() == ""){
    alert('Bạn không được để trống bình luận');
    return;
  }
     var value = $('#comment').val();
     if(value!='')
      $(".se-pre-con").fadeIn();
     //alert(id)
      $.ajax({
        url: '/shop/ajaxComment',
        type: 'POST',
        cache: false,
        data: {
           aid:id,
           avalue:value
        },
        success: function(data) {
          $(".se-pre-con").fadeOut();
          $('#ajaxComment').html(data);
          $('#comment').val('');
          //alert($data);
        },
        error: function(err) {
            alert('Có lỗi xảy ra' + err);
        }
    });
}
function rate(link,id){

    $(".se-pre-con").fadeIn();
    var value=$(".rating").rate("getValue");
   $.ajax({
        url: link,
        type: 'POST',
        cache: false,
        data: {
           aid:id,
           avalue:value
        },
        success: function(data) {
           $(".se-pre-con").fadeOut();
            $('.score p').text(data);

            //alert($data);
        },
        error: function(err) {
            alert('Có lỗi xảy ra' + err);
        }
    });
}
function rateButton(rate){
  $(".rating").rate("setValue",rate);
}



