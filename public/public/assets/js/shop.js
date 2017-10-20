 
function saveAjax(link,id){
	//alert(id);
   $.ajax({
        url: link,
        type: 'POST',
        cache: false,
        data: {
           aid:id,
           
        },
        success: function(data) {
            $('#save').html(data);
            //alert($data);
        },
        error: function(err) {
            alert('Có lỗi xảy ra' + err);
        }
    });
}

function loadMyComments(id){
     var value = $('#cmt').val();
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
            $('#ajaxComment').append(data);
            //alert($data);
        },
        error: function(err) {
            alert('Có lỗi xảy ra' + err);
        }
    });
}
function rate(link,id){
  
    
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



