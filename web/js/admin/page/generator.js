

$('#modalAddRow').on('shown.bs.modal', function () {        
    $('#modalAddRow form').on('submit',function (event) {
        $('#modalAddRow form .modal-footer button.btn-primary').attr("disabled","disabled").html("<i class='fa fa-spin fa-spinner'></i> Patienter...");
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
                    $('#modalAddRow form .modal-footer button.btn-primary').removeAttr("disabled").html("Enregistrer");
                    $('.norowcreated').remove();
                    addNewRowHTML(data.idPage,data.id,data.idCols,s.get("pagebundle_row[titreAdmin]"));
                    $('#modalAddRow').modal('hide');
                }
            }
        });
        return false;
    });
});


$('.modal').on('show.bs.modal', function (e) {
    var idModal = $(this).attr("id");
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
                        $('#'+idModal).modal('hide');
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
});


function addNewRowHTML(idPage,idRow,cols,title){
    
    
    var myDiv = $('<div></div>');
    myDiv.attr("id","newRow-"+idRow).addClass("row").addClass("demoRow");
    
    
    var myDivRemove = $('<div></div>');
    myDivRemove.addClass("col-xs-12").addClass("col-remove");
    
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
            $('#'+idModal+' .modal-content').html(data.form);
            $('#'+idModal).find("form").attr("novalidate","novalidate");
            $('#'+idModal).modal('show');
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
                label: '<i class="fa fa-times"></i> Annuler'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Supprimer la page'
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