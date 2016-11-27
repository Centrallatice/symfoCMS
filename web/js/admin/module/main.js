$('document').ready(function(){
   
   $('textarea').each(function(){
      var h= $(this).attr("height");
      $(this).froalaEditor({
            height:h
      }); 
   });
});

function deleteAjaxModule(id,url){
    bootbox.confirm({
        title : "Confirmation de la suppression",
        message : "Êtes-vous sûr de vouloir supprimer ce module ?",
        buttons: {
            cancel: {
                label: '<i class="material-icons left">cancel</i> Annuler',
                class:'btn green'
            },
            confirm: {
                label: '<i class="material-icons left">done</i> Supprimer le module'
            }
        },
        callback: function(result){ 
            if(result){
                $.ajax({
                    type: "DELETE",
                    url: url,
                    data: {id:id},
                    dataType: "JSON",
                    success: function (data) {
                        if(data.success){
                            Materialize.toast('Le module a bien été supprimé !', 3000, 'rounded green');
                            $('tr#module-'+id).remove();
                        }
                        else Materialize.toast('Une erreur est survenue', 3000, 'rounded red');
                    }
                });
            }
        }
    });
}