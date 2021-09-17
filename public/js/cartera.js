document.addEventListener("DOMContentLoaded", main);

function main() {

    cargarCartera();
    document.getElementById("moneyForm").addEventListener("submit", function (e) {

        // INHABILITA EL RECARGAR LA PÁGINA AL ENVIAR EL FORMULARIO//
        e.preventDefault();

        // LLAMAMOS A LA FUNCION ENVIARFORM PASANDOLE EL ELEMENTO ACTUAL //
        enviarForm(e.currentTarget);
        console.log("Has hecho click en enviar");
    });


    function cargarCartera() {
        const xhttp = new XMLHttpRequest();
        xhttp.addEventListener("readystatechange", function () {
            if (this.readyState == 4 && this.status == 200) {
                //console.log(this.responseText);
                muestraCartera(JSON.parse(this.responseText));
            }
        });
        xhttp.open("GET", "../src/Entity/showCartera.php", true);
        xhttp.send();
    }

    function muestraCartera(dato) {
        let cartera = document.getElementById("monederoWallet");
        for (fila in dato) {
           
            let spanEuro = document.createElement("span");
            spanEuro.innerHTML = "€";
            spanEuro.className = "Euro";

            let span = document.createElement("span");
            span.className = "blanco dinero";
            span.innerHTML = dato[fila].dinero;
            span.appendChild(spanEuro);
            
            cartera.appendChild(span);
        }
    }

    function enviarForm(formElement) {

        // CREAMOS UN OBJETO FORMDATA (FORMATO XMLHttpRequest)//
        let formData = new FormData(formElement);
        const xhttp = new XMLHttpRequest();
        xhttp.addEventListener("readystatechange", function () {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                console.log(this.responseText);
            }
        });
        xhttp.open("POST", "../src/Entity/updateCartera.php", true);
        xhttp.send(formData);
    }

    /* function updateAnuncios() {

        let datosAnteriores = document.getElementsByClassName("col-lg-4 col-md-6 mb-4");
        while (datosAnteriores[0]) {
            datosAnteriores[0].parentNode.removeChild(datosAnteriores[0]);
        }
    } */


    








}