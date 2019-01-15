$('.delete').click(function(){
   var res = confirm('Вы уверены, что хотите удалить?');
   if(!res) return false;
});