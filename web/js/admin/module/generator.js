function deleteAjaxModule(id,url){
    bootbox.confirm({
        title : "Confirmation de la suppression",
        message : "Êtes-vous sûr de vouloir supprimer ce module ?",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Annuler'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Supprimer le module'
            }
        },
        callback: function(result){ 
            if(result){
                $.ajax({
                    type: "DELETE",
                    url: url,
                    data: {idModule:id},
                    dataType: "JSON",
                    success: function (data) {
                        if(data.success){
                            $('tr#mod-'+id).remove();
                            Materialize.toast('Le module a bien été supprimé !', 3000, 'rounded green');
                        }
                        
                    }
                });
            }
        }
    });
}
