document.addEventListener("DOMContentLoaded",main);

function main(){

    cargar_anuncios();
    

    function cargar_anuncios() {

        const xhttp = new XMLHttpRequest();
        xhttp.addEventListener("readystatechange", function(){
            if(this.readyState == 4 && this.status == 200){

                rellenador_anuncios(JSON.parse(this.responseText));
            }
        });

        xhttp.open("GET","../src/Entity/showAnuncios.php", true);
        xhttp.send();

    
    }

    function modal(){
       /* let cos = document.getElementById("cos");

        let modal = new bootstrap.Modal(document.getElementById("modal"),{
            keyboard: false
        });
        let modal = document.createElement("div");
        modal.className = "modal fade";
        modal.id = "exampleModalCenter";
        modal.setAttribute("tabindex","-1");
        modal.setAttribute("role","dialog");
        modal.setAttribute("aria-labelledby","exampleModalCenterTitle");
        modal.setAttribute("aria-hidden","true");
        cos.appendChild(modal);

        let modal_dialog = document.createElement("div");
        modal_dialog.className = "modal-dialog modal-dialog-centered";
        modal_dialog.setAttribute("role","document");
        modal.appendChild(modal_dialog);

        let modal_content = document.createElement("div");
        modal_content.className = "modal-content";
        modal_dialog.appendChild(modal_content);

        let modal_header = document.createElement("div");
        modal_header.className = "modal-header";
        modal_content.appendChild(modal_header);

        let h5 = document.createElement("h5");
        h5.className = "modal-title center modal_precios";
        h5.id = "exampleModalLongTitle";
        h5.innerHTML = "Confirmación de compra";
        modal_header.appendChild(h5);

        let boton_cerrar = document.createElement("button");
        boton_cerrar.className = "close";
        boton_cerrar.setAttribute("type","button");
        boton_cerrar.setAttribute("data-dismiss","modal");
        boton_cerrar.setAttribute("aria-label","Close");
        modal_header.appendChild(boton_cerrar);

        let span_boton = document.createElement("span");
        span_boton.setAttribute("aria-hidden","true");
        span_boton.innerHTML =  "&times";
        modal_header.appendChild(span_boton);

        let body = document.createElement("div");
        body.className = "modal-body";
        body.innerHTML = "¿Está seguro de realizar la compra?";
        modal_content.appendChild(body);


        let footer = document.createElement("div");
        footer.className = "modal-footer";
        modal_content.appendChild(footer)

        let boton_no = document.createElement("button");
        boton_no.className = "btn btn-small btn--no";
        boton_no.setAttribute("type","button");
        boton_no.setAttribute("data-dismiss","modal");
        boton_no.innerHTML = "NO"
        footer.appendChild(boton_no);

        let boton_si = document.createElement("button");
        boton_si.className = "btn btn-small btn--green";
        boton_si.setAttribute("type","button");
        boton_si.innerHTML = "SI"
        boton_si.id = "boton_si";
        footer.appendChild( boton_si );

    

        modal.addEventListener("",function (e){
            let button = e.relatedTarget;
            let id = boton.value;
            console.log("hola");
            document.getElementById("boton_si").setAttribute("onclick", function(){
                    console.log("hola");
                    console.log(id);
                    
            });
        })*/
    }

    function rellenador_anuncios(array_anuncios_json){
        
        
        modal();



        let contenedor_anuncios = document.getElementById("contenedor");


        for(let z = 0; z < array_anuncios_json.length; z = z + 3){
    
           let fila_tarjeta = document.createElement("div");
           fila_tarjeta.className = "row";
           contenedor_anuncios.appendChild(fila_tarjeta);
           
        

           for(let x = z; (x < z+3) && (x < array_anuncios_json.length) ; x++){
    
              
            let primer_div = document.createElement("div");
            primer_div.className="col-lg-4 col-md-6 mb-4";
            fila_tarjeta.appendChild(primer_div);
 
            let segundo_div = document.createElement("div");
            segundo_div.className = "card h-100 lista bordes";
            primer_div.appendChild(segundo_div);
 
            let imagen = document.createElement("img");
            let foto = array_anuncios_json[x].foto
            imagen.className = "card-img-top";
            imagen.src = "./anuncios/" + foto;
            segundo_div.appendChild(imagen);
            
            let div_cuerpo = document.createElement("div");
            div_cuerpo.className = "card-body ";
            segundo_div.appendChild(div_cuerpo);
 
            let marca = document.createElement("p");
            marca.className = "items center marca";
            div_cuerpo.appendChild(marca);
            marca.innerHTML = array_anuncios_json[x].Marca;
 
            let precio = document.createElement("h5");
            precio.innerHTML = array_anuncios_json[x].precio + " €";
            precio.value = array_anuncios_json[x].precio;
            precio.className = "center precio span_sombras ";
            div_cuerpo.appendChild(precio);
            
            
            let lista = document.createElement("ul");
            lista.className = "card-text descripcion_coche";
            div_cuerpo.appendChild(lista);
 
            let modelo = document.createElement("li");
            lista.appendChild(modelo);
            modelo.className = "fila fuente_anuncios modelo ul";
            modelo.innerHTML = array_anuncios_json[x].modelo;
            
 
            let color = document.createElement("li");
            color.className = "fila fuente_anuncios modelo";
            color.innerHTML = array_anuncios_json[x].color;
            lista.appendChild(color);
            
 
            let año = document.createElement("li");
            año.className = "fila fuente_anuncios modelo";
            año.innerHTML = array_anuncios_json[x].ano;
            lista.appendChild(año);
            
 
            let km = document.createElement("li");
            km.className = "fila fuente_anuncios modelo";
            km.innerHTML = array_anuncios_json[x].km +" Km" ;
            lista.appendChild(km);
            
 
            let footer = document.createElement("div");
            footer.className = "card-footer center fuente_navbar";
             segundo_div.appendChild(footer);
 
             let boton = document.createElement("button");
             boton.className = "btn btn--radius-2 btn--red";
             boton.id = "boton_compra"
             boton.value  = array_anuncios_json[x].id_anuncio;
            boton.value  = array_anuncios_json[x].id_anuncio;
             boton.innerHTML = "COMPRAR";
             footer.appendChild(boton);

             


           }
           
        }

        const xhttp = new XMLHttpRequest();
            let id_compra = document.getElementById("boton_compra");
            let valor = id_compra.value;
            
            
            xhttp.addEventListener("readystatechange", function(){
                if(this.readyState == 4 && this.status == 200){

                    //rellenador_anuncios(JSON.parse(this.responseText));
                }
            });

            xhttp.open("GET","../src/Entity/showcomprarAnuncio.php?"+valor, true);
            xhttp.send();

    }

   
}

