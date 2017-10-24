 $('#search').click();
 function search(link){
    var key = $('#inputSearch').val();
   showLoader();
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
            hiddenLoader();
        },
        error: function(err) {
            alert('Có lỗi xảy ra' + err);
        }
    });
}

function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode != 45  && charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}
