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