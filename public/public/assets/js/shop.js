 
function search(link){
	alert('a');
   $.ajax({
        url: link,
        type: 'POST',
        cache: false,
        data: {
           
        },
        success: function(data) {
            $('.form-group').html(data);
            //alert($data);
        },
        error: function(err) {
            alert('Có lỗi xảy ra' + err);
        }
    });
}


