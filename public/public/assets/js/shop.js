 
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



