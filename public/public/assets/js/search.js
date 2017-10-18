if($('#input').value != "" && $('#input') != undefined){
    $('#searchId').click();
}

function searchShopName() {
    var name = document.getElementById('inputSearch');
    var button = document.getElementById('linkToSearch');
    button.href = "/search?name=" + name.value;
}
$('input[type=text]').on('keydown',function (e) {
    if(e.which==13){
       var name = document.getElementById('inputSearch');
       var button = document.getElementById('linkToSearch');
       button.href = "/search?name=" + name.value;
       button.click();
   }
});
