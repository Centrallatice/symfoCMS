$(document).ready(function(){
   $('.modal#modalAddRow').modal({
       ready:function(modal,trigger){
           $('#modalAddRow form').on('submit',function (event) {
                $('#modalAddRow .modal-footer button.btn.green').attr("disabled","disabled").html("<i class='fa fa-spin fa-spinner'></i> Patienter...");
                event.preventDefault();
                var s = new FormData(this);
                $.ajax({
                    type: "POST",
                    data: s,
                    url: $(this).attr("action"),
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        if(data.success){
                            $('#modalAddRow .modal-footer button.btn.green').removeAttr("disabled").html("Enregistrer");
                            $('.norowcreated').remove();
                            addNewRowHTML(data.idPage,data.id,data.idCols,s.get("pagebundle_row[titreAdmin]"));
                            $('#modalAddRow').modal('close');
                        }
                    }
                });
                return false;
            });
       }
   });
   $('.modal#modalEditRow,.modal#modalEditCol').modal({
       ready:function(modal,trigger){
            var idModal = $(modal).attr("id");
            var arrayModalEdition=["modalEditCol","modalEditRow"];
            if(arrayModalEdition.indexOf(idModal)>=0){
                $('#'+idModal+' form').on('submit',function (event) {
                    event.preventDefault();
                    var s = new FormData(this);
                    $.ajax({
                        type: "POST",
                        data: s,
                        url: $(this).attr("action"),
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            if(data.success){
                                $('#'+idModal).modal('close');
                                return false;
                            }
                            else{
                                alert("Une erreur est survenue");
                                return false;
                            }
                        }
                    });

                });
            }
          
       }
   });
   $('#pagebundle_page_keywords_fake').keypress(function( event ) {
        if ( event.which == 13 || event.which == 59 ) {
            event.preventDefault();
            refactorKW(true);
        }
   });
   $('#pagebundle_page_keywords_fake').blur(function() {
       if($('#pagebundle_page_keywords_fake').val().length>0){
            refactorKW(true);
       }
   });
   $('.tagify-container .alert.kw').on('closed.bs.alert', function () {
       refactorKW(false);
        
   })
});

function refactorKW(creation){
    if(creation){
        var tag = $('#pagebundle_page_keywords_fake').val();
        var span = new $("<div></div>");
        span.attr("role","alert").addClass("alert kw alert-dismissible fade in");
        var cancelTag = new $("<button></button>");
        cancelTag.attr("type","button").addClass("close").attr("data-dismiss","alert").attr("aria-label","close");
        cancelTag.html('<span aria-hidden="true">&times;</span>');
        span.html(tag);
        cancelTag.prependTo(span);
        span.insertBefore(".tagify-container input");
        $('#pagebundle_page_keywords_fake').val("");
        $('#pagebundle_page_keywords_final').val("");
    }
    var finalValue = "";
    $('.tagify-container div[role=alert]').each(function(){
       finalValue+=$(this).text().trim().substr(1)+";"; 
    });
    $('#pagebundle_page_keywords_final').val(finalValue);
}
function addNewRowHTML(idPage,idRow,cols,title){
    
    
    var myDiv = $('<div></div>');
    myDiv.attr("id","newRow-"+idRow).addClass("row").addClass("demoRow");
    
    
    var myDivRemove = $('<div></div>');
    myDivRemove.addClass("col s12").addClass("col-remove");
    
    var spanTitle = $("<span></span>");
    $(spanTitle).html(title);
    
    var linkRemove = $("<a></a>");
    linkRemove.addClass("add-addon").attr("id","deleteRow").html('<i class="fa fa-remove fa-opaciteme"></i>').attr("title","Supprimer");
    
    var linkEdit = $("<a></a>");
    linkEdit.addClass("add-addon").attr("id","editRow").html('<i class="fa fa-cog fa-opaciteme"></i>').attr("title","modifier");
                   
    $(linkEdit).on('click',function(){
        getModalEdit(idRow,basePageAdmin+'row/Ajax/'+idRow+'/edit','modalEditRow');
    });
    
    $(linkRemove).on('click',function(){
        deleteRow(idPage,idRow,basePageAdmin+'row/Ajax/'+idRow);
    });
    
    spanTitle.appendTo(myDivRemove);
    linkEdit.appendTo(myDivRemove);
    linkRemove.appendTo(myDivRemove);
    myDivRemove.appendTo(myDiv);
    
    
    for(var c in cols){
        var col = $('<div></div>');
        col.attr("id","newCol-"+cols[c]['id']).addClass(cols[c]['cssClass']).addClass("demoCol");
        
        var innerCol = $('<div></div>');
        innerCol.addClass("column").addClass("ui-sortable");
        innerCol.appendTo(col);
        
        var colSetting = $('<div></div>');
        colSetting.addClass("col-settings");
        
        var linkSetting = $('<a></a>');
        linkSetting.addClass("add-addon").html("<i class='fa fa-edit'></i> Editer");
        
        $(innerCol,linkSetting).on('click',function(){
            getModalEdit(idRow,basePageAdmin+'col/Ajax/'+cols[c]['id']+'/edit','modalEditCol');
        });
        
        linkSetting.appendTo(colSetting);
        colSetting.appendTo(col);
        col.appendTo(myDiv);
    }
    myDiv.appendTo(".containerPageCreation");
}
function getModalEdit(id,url,idModal){
   $.ajax({
        type: "GET",
        url: url,
        data:{identifiant:id},
        dataType: "JSON",
        success: function (data) {
            $('#'+idModal).html(data.form);
            $('#'+idModal).find("form").attr("novalidate","novalidate");
            $('#'+idModal).modal('open');
            $('#'+idModal+' label').addClass("active");
            $('#'+idModal+' select').material_select();
        }
    }); 
}

function deleteRow(idPage,idRow,url){
    bootbox.confirm({
        title : "Confirmation de la suppression",
        message : "Êtes-vous sûr de vouloir supprimer cette ligne ?",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Annuler'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Supprimer la ligne'
            }
        },
        callback: function(result){ 
            if(result){
                $.ajax({
                    type: "DELETE",
                    url: url,
                    data: {idRow:idRow,idPage:idPage},
                    dataType: "JSON",
                    success: function (data) {
                        if(data.success) $('#newRow-'+idRow).remove();
                    }
                });
            }
        }
    });
}
function deleteAjaxPage(idPage,url){
    bootbox.confirm({
        title : "Confirmation de la suppression",
        message : "Êtes-vous sûr de vouloir supprimer cette page ?",
        buttons: {
            cancel: {
                label: '<i class="material-icons left">cancel</i> Annuler',
                class:'btn green'
            },
            confirm: {
                label: '<i class="material-icons left">done</i> Supprimer la page'
            }
        },
        callback: function(result){ 
            if(result){
                $.ajax({
                    type: "DELETE",
                    url: url,
                    data: {idPage:idPage},
                    dataType: "JSON",
                    success: function (data) {
                        if(data.success) $('tr#page-'+idPage).remove();
                    }
                });
            }
        }
    });
}