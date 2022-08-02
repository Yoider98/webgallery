$(document).ready(function () {
    $.ajax({
        url: '../../../controller/action/ajax_obras.php',
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
                +'</div>'
                +'</div>'
                +'</div>'
            })
            $('#space-list').append(html);
           // document.getElementById("space-list").innerHTML = html;
        },
        error: function (err) {
            console.error(err);
        }
    });
});
