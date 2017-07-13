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


$( document ).ready(function() {
    // DOM ready

    // Test data
    /*
     * To test the script you should discomment the function
     * testLocalStorageData and refresh the page. The function
     * will load some test data and the loadProfile
     * will do the changes in the UI
     */
    // testLocalStorageData();
    // Load profile if it exits
    loadProfile();
});

/**
 * Function that gets the data of the profile in case
 * thar it has already saved in localstorage. Only the
 * UI will be update in case that all data is available
 *
 * A not existing key in localstorage return null
 *
 */
function getLocalProfile(callback){
    var profileImgSrc      = localStorage.getItem("PROFILE_IMG_SRC");
    var profileName        = localStorage.getItem("PROFILE_NAME");
    var profileReAuthEmail = localStorage.getItem("PROFILE_REAUTH_EMAIL");

    if(profileName !== null
        && profileReAuthEmail !== null
        && profileImgSrc !== null) {
        callback(profileImgSrc, profileName, profileReAuthEmail);
    }
}

/**
 * Main function that load the profile if exists
 * in localstorage
 */
function loadProfile() {
    if(!supportsHTML5Storage()) { return false; }
    // we have to provide to the callback the basic
    // information to set the profile
    getLocalProfile(function(profileImgSrc, profileName, profileReAuthEmail) {
        //changes in the UI
        $("#profile-img").attr("src",profileImgSrc);
        $("#profile-name").html(profileName);
        $("#reauth-email").html(profileReAuthEmail);
        $("#inputEmail").hide();
        $("#remember").hide();
    });
}

/**
 * function that checks if the browser supports HTML5
 * local storage
 *
 * @returns {boolean}
 */
function supportsHTML5Storage() {
    try {
        return 'localStorage' in window && window['localStorage'] !== null;
    } catch (e) {
        return false;
    }
}

/**
 * Test data. This data will be safe by the web app
 * in the first successful login of a auth user.
 * To Test the scripts, delete the localstorage data
 * and comment this call.
 *
 * @returns {boolean}
 */
function testLocalStorageData() {
    if(!supportsHTML5Storage()) { return false; }
    localStorage.setItem("PROFILE_IMG_SRC", "//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" );
    localStorage.setItem("PROFILE_NAME", "César Izquierdo Tello");
    localStorage.setItem("PROFILE_REAUTH_EMAIL", "oneaccount@gmail.com");
}



