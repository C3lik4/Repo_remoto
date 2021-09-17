document.addEventListener("DOMContentLoaded",main);

function main(){

    load();
    load2();

    document.getElementById("formulario_venta").addEventListener("submit", function (e) {

        // INHABILITA EL RECARGAR LA PÁGINA AL ENVIAR EL FORMULARIO//
        e.preventDefault();

        // LLAMAMOS A LA FUNCION ENVIARFORM PASANDOLE EL ELEMENTO ACTUAL //
        enviarForm(e.currentTarget);
        console.log("Has hecho click en enviar");
    });

 


    function load() {

        const xhttp = new XMLHttpRequest();
        xhttp.addEventListener("readystatechange", function(){
            if(this.readyState == 4 && this.status == 200){

                rellenador(JSON.parse(this.responseText));
            }
        });

        xhttp.open("GET","../src/Entity/showMarca.php", true);
        xhttp.send();

    
    }

    function rellenador(array_json){
        let select = document.getElementById("marca");

        for(z in array_json){
           let opcion = document.createElement('option');
            opcion.text = array_json[z].title;
            opcion.value = array_json[z].id;
            select.appendChild(opcion);
        }

    }

    function load2() {

        const xhttp = new XMLHttpRequest();
        xhttp.addEventListener("readystatechange", function(){
            if(this.readyState == 4 && this.status == 200){

                rellenador_modelo(JSON.parse(this.responseText));
            }
        });

        xhttp.open("GET","../src/Entity/showModelo.php", true);
        xhttp.send();


    }

    function rellenador_modelo(array_modelos_json){
        let select = document.getElementById("marca");
        let select_modelo = document.getElementById("modelo");
        let que_marca_es = select.addEventListener("change",function(){
            select_modelo.innerHTML = "";

            for(y in array_modelos_json){

                if(this.value == array_modelos_json[y].make_id){

                    let opcion = document.createElement("option");
                    opcion.text = array_modelos_json[y].title;
                    opcion.value = array_modelos_json[y].id;
                    select_modelo.appendChild(opcion);


                }

            }





        })
    }

    function enviarForm(formElement) {

        // CREAMOS UN OBJETO FORMDATA (FORMATO XMLHttpRequest)//
        let formData = new FormData(formElement);
        const xhttp = new XMLHttpRequest();
        xhttp.addEventListener("readystatechange", function () {
            if (xhttp.readyState == 4 && xhttp.status == 200){ 
            console.log(this.responseText);
            }
        });
        xhttp.open("POST", "../src/Entity/enviaForm.php", true);
        xhttp.send(formData);
    }





}