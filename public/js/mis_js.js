$('.fj-date').datepicker({
    format: "dd/mm/yyyy",
    language: "es"
});

function myFunction() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("buscador");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

$(document).ready(function (e) {
    $('#myModal2').on('show.bs.modal', function(e) {

        var id = $(e.relatedTarget).data().id;
        var titulo = $(e.relatedTarget).data().titulo;
        var descripcion = $(e.relatedTarget).data().descripcion;

        $(e.currentTarget).find('#id_evento2').val(id);
        $(e.currentTarget).find('#titulo2').val(titulo);
        $(e.currentTarget).find('#descripcion2').val(descripcion);
    });
});

$(document).ready(function (e) {
    $('#myModal4').on('show.bs.modal', function(e) {

        var id = $(e.relatedTarget).data().id;
        var titulo = $(e.relatedTarget).data().titulo;
        var descripcion = $(e.relatedTarget).data().descripcion;
        var inicio = $(e.relatedTarget).data().inicio;
        var fin = $(e.relatedTarget).data().fin;

        $(e.currentTarget).find('#id_actividad2').val(id);
        $(e.currentTarget).find('#titulo3').val(titulo);
        $(e.currentTarget).find('#descripcion3').val(descripcion);
        $(e.currentTarget).find('#inicio3').val(inicio);
        $(e.currentTarget).find('#fin3').val(fin);
    });
});
