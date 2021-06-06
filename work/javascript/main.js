//Formvalidering til kontakt formular
(function () {
    //Use strict gør at der vil gå fejl i JavaScripten, hvis der mangler at blive defineret noget. Dvs. Hvis ikke at forms var defineret, ville  der gå fejl i den.
    'use strict'

    // Vi henter alle de elementer vi vil tilføje vores javascript til. Da vi har flere child-elementer, bruger vi querySelectorAll for at hente elementerne som et array
    let forms = document.querySelectorAll(".needs-validation");

    // Vi looper dem igennem, og forhindre indsendelse af formularen.
    Array.prototype.slice.call(forms) //laver et array ligende objekt, til et rigtigt array.
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) //returnerer true hvis et input element indeholder valid data, returnerer false og bliver rød, hvis der ikke er valid data i input elementet 
                {
                    event.preventDefault() //Her annullerer vi eventet, hvis den kan annulleres, hvilket betyder, at den standardhandling der hører til eventet, ikke bliver gjort. I dette tilfælde, sender den ikke formen hvis ikke alt er udfyldt.
                }

                form.classList.add('was-validated') //Vi tilføjer klassen was-validated, hvis den data der er skrevet ind er valid.
            }, false)
        })
})()


//Modal pop-up
var myModal = document.getElementById('myModal')


$(window).on('load', function () {
    $('#myModal').modal('show'); 
});

//Timer til købsproces



/*
$(window).on('load', function () {
    $('#myModal').modal('show');
});

*/
//VUE.js bruges til validering under login.
new Vue({
    el: "#app",
    data: {
        active: false,
        username: '',
        password: '',
        name: '',
        validation: null,

    },
});