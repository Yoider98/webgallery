
$(document).ready(function () {
    $.ajax({
        url: '../../../controller/action/ajax_obrasId.php',
        success: function (datos) {
            let data=JSON.parse(datos);
            console.log(data);
            let html = '';
            $.each(data , function(i){
                html +='<div class="col-4 align-items-center">' 
                +'<div class="card" style="width: 18rem; ">'
                +'<img class="card-img-top" src="../../../assets/'+data[i].imagen+'" alt="Card image cap">'
                +'<div class="card-body">'
                +'<h5 class="card-title text-center text-dark">'+ data[i].nombreObra.charAt(0).toUpperCase()+data[i].nombreObra.slice(1)+'</h5>'
                +'<p  class="card-title text-center text-dark">'+data[i].descripcion+'</p>'
                +'<a type="button" class="editar btn btn-warning col-6 " data-toggle="modal" data-target="#modalEditarObra" id='+data[i].id+'>Editar</a>'
                +'<a href="../../../controller/action/act_eliminarobra.php?id='+data[i].id+'" class="btn btn-danger col-6">Eliminar</a>'
                +'</div>'
                +'</div>'
                +'</div>'
            })
            $('#space-list').append(html);
            editarDatos();
            //ver();
        },
        error: function (err) {
            console.error(err);
        }
    });
});

function editarDatos(){
    $(".editar").on("click",function(){
        let idobra=$(this).closest("a").attr("id");
        $.ajax({
            type: "POST",
            data: {idobra: parseInt(idobra,10)},
            url: "../../../controller/action/ajax_ObrasIdObras.php",
            success: function(data){
            console.log(data);
                let obra=JSON.parse(data);
                $("#modalEditarObra input[name='id']").val(obra[0].id);
                $("#modalEditarObra input[name='nombreObra']").val(obra[0].nombreObra);
                $("#modalEditarObra input[name='imagen']").val(obra[0].imagen);
                $("#modalEditarObra input[name='descripcion']").val(obra[0].descripcion);
               
                
            }
        })
    })
}