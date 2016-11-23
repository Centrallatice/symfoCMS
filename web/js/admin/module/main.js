$('document').ready(function(){
   
   $('textarea').each(function(){
      var h= $(this).attr("height");
      $(this).froalaEditor({
            height:h
      }); 
   });
});