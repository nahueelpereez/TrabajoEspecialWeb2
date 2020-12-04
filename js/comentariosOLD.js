/*"use strict"

document.addEventListener('DOMContentLoaded', function(){
    
    // define la app Vue
    let app = new Vue({
        el: "#template-vue-comentarios",
        data: {
            subtitle: "Estos comentarios se renderizan desde el cliente usando Vue.js",
            comentarios: [], 
            auth: true
        }
    });
    
    
    // obtiene los comentarios al inicio
    obtenerComentarios();
    
    //document.querySelector("#form-comentarios").addEventListener('submit', agregarComentario);
    /**
     * Obtiene la lista de comentarios de la API y las renderiza con Vue.
     */
    /*function obtenerComentarios() {
        fetch("api/comentarios")
        .then(response => response.json())
        .then(comentarios => {
            console.log(comentarios);
            app.comentarios = comentarios; // similar a $this->smarty->assign("tasks", $tasks)
        })
        .catch(error => console.log(error));
    }

    function borrarComentario(id) {

        let url = "http//localhost/TrabajoEspecialPair/api/comentarios"
        fetch(url + "/" + id, {
            'method': 'DELETE',
        })
            .then(function (r) {
                if (!r.ok) {
                    console.log("error")
                }
                return r.json()
            })
            .then(function (json) {
                //data.innerHTML = JSON.stringify(json);
                obtenerComentarios();
            })
            .catch(function (e) {
                console.log(e)
            })

    }

    function getProductId() {
        let params = window.location.href.split("/");
        return params[parseInt(params.length) - 1];
    }
    

    async function agregarComentario(event) {
        console.log("agregarComentario");
        
        event.preventDefault();

        let contenido = document.querySelector("#columna1").value;
        let puntuacion = document.querySelector("#columna2").value;
        let producto = getProductId();

        let data = {
            contenido:  contenido,
            puntuacion:  puntuacion,
            producto:  producto
        }
        
        

        console.log(data);
        let res = await fetch("http//localhost/TrabajoEspecialPair/api/addComentario", {
            'method': 'POST',
            'headers': {
                'Content-Type': 'application/json'
            },
            'body': JSON.stringify(data)


        });
        console.log(res.status);
        obtenerComentarios();
            /*.then(function (r) {
                if (!r.ok) {
                    console.log("error")
                }
                else
                obtenerComentarios();
                return r.json()
            })
            .catch(function (e) {
              //console.log(e)
            })*/
    //}

    /*function agregarFilaComentarios(){
    agregarComentario();
    }*/

    /*let btn = document.querySelector("#boton1");
    btn.addEventListener('click', (event) => {
        agregarComentario(event);
    });

    //let btn2 = document.querySelector("#botonBorrar");
    //btn2.addEventListener('click', borrarComentario);

});*/