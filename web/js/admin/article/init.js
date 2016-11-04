$( document ).ready( function () { 
    $( "#articlebundle_article_contenu" ).froalaEditor({
        toolbarInline : false,
        language : "fr",
        height : "350"
    });
    $('#articlebundle_page_kw_fake').keypress(function( event ) {
        if ( event.which == 13 || event.which == 59 ) {
            event.preventDefault();
            refactorKW(true);
        }
   });
   $('#articlebundle_page_kw_fake').blur(function() {
       if($('#articlebundle_page_kw_fake').val().length>0){
            refactorKW(true);
       }
   });
   $('.tagify-container .alert.kw').on('closed.bs.alert', function () {
       refactorKW(false);
        
   })
});

function refactorKW(creation){
    if(creation){
        var tag = $('#articlebundle_page_kw_fake').val();
        var span = new $("<div></div>");
        span.attr("role","alert").addClass("alert kw alert-dismissible fade in");
        var cancelTag = new $("<button></button>");
        cancelTag.attr("type","button").addClass("close").attr("data-dismiss","alert").attr("aria-label","close");
        cancelTag.html('<span aria-hidden="true">&times;</span>');
        span.html(tag);
        cancelTag.prependTo(span);
        span.insertBefore(".tagify-container input");
        $('#articlebundle_page_kw_fake').val("");
        $('#articlebundle_page_final').val("");
    }
    var finalValue = "";
    $('.tagify-container div[role=alert]').each(function(){
       finalValue+=$(this).text().trim().substr(1)+";"; 
    });
    $('#articlebundle_page_final').val(finalValue);
}