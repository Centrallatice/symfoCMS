

function deleteAjaxArticle(idArticle,url){
    bootbox.confirm({
        title : "Confirmation de la suppression",
        message : "Êtes-vous sûr de vouloir supprimer cet article ?",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Annuler'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Supprimer l\'article'
            }
        },
        callback: function(result){ 
            if(result){
                $.ajax({
                    type: "DELETE",
                    url: url,
                    data: {idArticle:idArticle},
                    dataType: "JSON",
                    success: function (data) {
                        if(data.success) $('tr#art-'+idArticle).remove();
                    }
                });
            }
        }
    });
}