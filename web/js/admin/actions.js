$('.alert button.close').on('click',function(){
   $(this).parent().remove(); 
});
$(document).ready(function(){
    $('select').each(function(){
       $(this).material_select();
   });
   $('.button-collapse').sideNav({
        menuWidth: 300, // Default is 240
        edge: 'right', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true // Choose whether you can drag to open on touch screens
      }
    );
});