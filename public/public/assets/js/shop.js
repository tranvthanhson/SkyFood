 
function save(link,id){
	//alert(id);
   $.ajax({
        url: link,
        type: 'POST',
        cache: false,
        data: {
           aid:id
        },
        success: function(data) {
            $('#notification').html(data);
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



