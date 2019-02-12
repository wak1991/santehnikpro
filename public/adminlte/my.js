$('.delete').click(function(){
   var res = confirm('Вы уверены, что хотите удалить?');
   if(!res) return false;
});

$('.sidebar-menu a').each(function(){
   var location2 = window.location.protocol + '//' + window.location.host + window.location.pathname;
   var link = this.href;
   if(link == location2){
      $(this).parent().addClass('active');
      $(this).closest('.treview').addClass('active');
   }
});

if($('div').is('#single')){
    var buttonSingle = $("#single"),
        file;
}

if(buttonSingle){
    new AjaxUpload(buttonSingle, {
        action: adminpath + buttonSingle.data('url') + "?upload=1",
        data: {
            name: buttonSingle.data('name'),
            folder: buttonSingle.data('folder'),
        },
        name: buttonSingle.data('name'),
        onSubmit: function(file, ext){
            if (! (ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
                alert('Ошибка! Разрешены только картинки');
                return false;
            }
            buttonSingle.closest('.file-upload').find('.overlay').css({'display':'block'});

        },
        onComplete: function(file, response){
            setTimeout(function(){
                buttonSingle.closest('.file-upload').find('.overlay').css({'display':'none'});

                response = JSON.parse(response);
                $('.' + buttonSingle.data('name')).html('<img src="'+buttonSingle.data('folder') + response.file + '" style="max-height: 150px;">');
            }, 1000);
        }
    });
}