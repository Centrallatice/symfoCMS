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
    $(spanTitle).addClass("titleAdminRow");
    $(spanTitle).html(title);
    
    var linkRemove = $("<a></a>");
    linkRemove.addClass("add-addon").attr("id","deleteRow").html('<i class="fa fa-remove fa-opaciteme"></i>').attr("title","Supprimer cette ligne");
    
    var linkActive = $("<a></a>");
    linkActive.addClass("add-addon").attr("id","setEtatRow").html('<i class="fa fa-eye-slash fa-opaciteme"></i>').attr("title","Activer cette ligne");
    
    var linkEdit = $("<a></a>");
    linkEdit.addClass("add-addon").attr("id","editRow").html('<i class="fa fa-pencil fa-opaciteme"></i>').attr("title","Modifier cette ligne");
                   
    $(linkEdit).on('click',function(){
        getModalEdit(idRow,basePageAdmin+'row/Ajax/'+idRow+'/edit','modalEditRow');
    });
    
    $(linkRemove).on('click',function(){
        deleteRow(idPage,idRow,basePageAdmin+'row/Ajax/'+idRow);
    });
    $(linkActive).on('click',function(){
        activeDesactive(idPage,idRow,basePageAdmin+'row/Ajax/setEtat/'+idRow);
    });
    
    spanTitle.appendTo(myDivRemove);
    linkEdit.appendTo(myDivRemove);
    linkActive.appendTo(myDivRemove);
    linkRemove.appendTo(myDivRemove);
    myDivRemove.appendTo(myDiv);

    myDiv.appendTo(".containerPageCreation");
    refactorColonnes(cols,idRow);
}

function refactorColonnes(cols,idRow){
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
        col.appendTo($('#newRow-'+idRow));
    }
}
function getModalEdit(id,url,idModal){
   $.ajax({
        type: "GET",
        url: url,
        data:{identifiant:id},
        dataType: "JSON",
        async:false,
        success: function (data) {
            var myDiv = $('<div></div>');
            myDiv.attr("id",idModal).addClass("modal modal-lg modal-fixed-footer");
            myDiv.html(data.form);
            myDiv.appendTo("body");
            $('#'+idModal).modal({
                ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
                    modal.find("form").attr("novalidate","novalidate");
                    modal.find("label").addClass("active");
                    modal.find('select').material_select();
                    var idModal = $(modal).attr("id");
                    var arrayModalEdition=["modalEditCol","modalEditRow"];
                    if(arrayModalEdition.indexOf(idModal)>=0){
                        modal.find("form").on('submit',function (event) {
                            modal.find(".modal-footer button.btn.green").attr("disabled","disabled").html("<i class='fa fa-spin fa-spinner'></i> Patienter...");
                
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
                                        if(idModal=="modalEditRow"){
                                            Materialize.toast('La ligne a bien été modifiée !', 3000, 'rounded green');
                                            $('#newRow-'+id).find(".titleAdminRow").html(s.get("pagebundle_row[titreAdmin]"));
                                            if(data.updatedRow){
                                                $('#newRow-'+id).find(".demoCol").remove();
                                                refactorColonnes(data.idCols,id);
                                            }
                                        }
                                        else if(idModal=="modalEditCol"){
                                            Materialize.toast('La colonne a bien été modifiée !', 3000, 'rounded green');
                                        }
                                        $('#'+idModal).modal('close');
                                    }
                                    else{
                                        Materialize.toast('Une erreur est survenue', 3000, 'rounded red');
                                        modal.find(".modal-footer button.btn.green").removeAttr("disabled").html("Enregistrer");
                                        return false;
                                    }
                                }
                            });

                        });
                    }
                },
                complete: function() {
                    $('#'+idModal).remove();
                } 
            });
            $('#'+idModal).modal('open');
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
                        if(data.success){
                            Materialize.toast('La ligne a bien été supprimée !', 3000, 'rounded green');
                            $('#newRow-'+idRow).remove();
                        }
                        else Materialize.toast('Une erreur est survenue', 3000, 'rounded red');
                    }
                });
            }
        }
    });
}
function activeDesactive(idPage,idRow,url){   
    $.ajax({
        type: "POST",
        url: url,
        data: {idRow:idRow,idPage:idPage},
        dataType: "JSON",
        success: function (data) {
            if(data.success){
                if($('#newRow-'+idRow).find("i.fa-eye-slash").length!=0){
                    $('#newRow-'+idRow).find("i.fa-eye-slash").removeClass("fa-eye-slash").addClass("fa-eye").attr("title","Activer cette ligne");
                    Materialize.toast('La ligne a bien été désactivée!', 3000, 'rounded green');
                }
                else{
                    $('#newRow-'+idRow).find("i.fa-eye").removeClass("fa-eye").addClass("fa-eye-slash").attr("title","Désactiver cette ligne");
                    Materialize.toast('La ligne a bien été activée!', 3000, 'rounded green');
                }
            }
            else Materialize.toast('Une erreur est survenue', 3000, 'rounded red');
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
                        if(data.success){
                            Materialize.toast('La page a bien été supprimée !', 3000, 'rounded green');
                            $('tr#page-'+idPage).remove();
                        }
                        else Materialize.toast('Une erreur est survenue', 3000, 'rounded red');
                    }
                });
            }
        }
    });
}