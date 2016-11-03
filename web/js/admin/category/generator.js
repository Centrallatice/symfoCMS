function deleteAjaxCategory(idCategory,url,confirmMe){
    if(confirmMe){
        bootbox.confirm({
            title : "Confirmation de la suppression",
            message : "Êtes-vous sûr de vouloir supprimer cette catégorie ?\n\
                <br /><br /><div class='alert alert-danger'>Attention les catégories enfants seront également supprimées</div>",
            buttons: {
                cancel: {
                    label: '<i class="fa fa-times"></i> Annuler'
                },
                confirm: {
                    label: '<i class="fa fa-check"></i> Supprimer'
                }
            },
            callback: function(result){ 
                if(result){
                    $.ajax({
                        type: "DELETE",
                        url: url,
                        data: {idCategory:idCategory},
                        dataType: "JSON",
                        success: function (data) {
                            if(data.success) window.location.reload();
                        }
                    });
                    
                }
            }
        });
    }
    else{
        $.ajax({
            type: "DELETE",
            url: url,
            data: {idCategory:idCategory},
            dataType: "JSON",
            success: function (data) {
                if(data.success) $('tr#cat-'+idCategory).remove();
            }
        });
    }
}
function deleteAjaxCategories(url){
    bootbox.confirm({
        title : "Confirmation de la suppression",
        message : "Êtes-vous sûr de vouloir supprimer ces catégories ?\n\
            <br /><br /><div class='alert alert-danger'>Attention les catégories enfants seront également supprimées</div>",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Annuler'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Supprimer'
            }
        },
        callback: function(result){ 
            if(result){
                $('input[type=checkbox][class=set_selection]').each(function(){
                    if($(this).prop("checked")) deleteAjaxCategory($(this).val(),url,false);
                });
            }
        }
    });
}
function changeStateAjaxCategories(url,etat){
    var idC = [];
    $('input[type=checkbox][class=set_selection]').each(function(){
        if($(this).prop("checked")) idC.push($(this).val());
    });
    $.ajax({
        type: "POST",
        url: url,
        data: {idCategories:idC,etat:(etat) ? 1 : 0},
        dataType: "JSON",
        success: function (data) {
            if(data.success) window.location.reload();
        }
    });
}

function checkUncheckAll(){
    $('input[type=checkbox][class=set_selection]').each(function(){
        $(this).prop("checked",$('input[type=checkbox][name=selected_category_master]').prop("checked"));
    });
}