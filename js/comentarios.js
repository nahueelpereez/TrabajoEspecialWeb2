"use strict"

document.getElementById("boton1").addEventListener('click', (event) => {
    postComment(event);
});


let app = new Vue({
    el: "#template-vue-comentarios",
    data: {
        subtitle: "Renderizado de comentarios",
        comments: [], 
        commentexists: true,
        admin: true
    },
    methods: {
        fetchDeleteComment: async function (id_producto) {
            const res = await fetch("api/delComentario/" + id_producto, {
                method: "DELETE",
            });
            if (200 <= res.status && res.status < 300) { 
                obtenerComentarios(); 
            }else
                if (res.value = 401) {
                    //MANDARLO AL LOGIN (NO SE SI DE ESTA FORMA)
                    const arrUrl = window.location.href.split('/');
                    arrUrl.pop();
                    arrUrl.pop();
                    const baseUrl =arrUrl.join('/');
                    window.location.href = baseUrl + "/login";
                } else {
                    alert("no tienes permisos para lo que intentas hacer");
                }
        }
    }
});


async function obtenerComentarios(){
    const res = await fetch("api/comentarios");
    if (res.ok) {
        const comments = await res.json();
        app.comments = comments;
        app.commentexists = true;
    } else { 
        app.commentexists = false; 
    }
}

function getProductId() {
    let params = window.location.href.split("/");
    return params[parseInt(params.length) - 1];
}
obtenerComentarios();

function postComment(event) {
    event.preventDefault();
    let contenido = document.getElementById("columna1").value;
    let puntuacion = document.getElementById("columna2").value;
    let id_producto = getProductId();
    fetchPostComment(contenido, puntuacion, id_producto);
    document.getElementById("columna1").value = "";
    document.getElementById("columna2").value = 5;
}


async function fetchPostComment(contenido, puntuacion, id_producto) {
    let commentData = {
        puntuacion: puntuacion,
        contenido: contenido,
        id_producto: id_producto
    };
    fetch('api/addComentarios', {
        method: 'POST',
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(commentData)
    })
        .then(response => response.json())
        .then(comment => obtenerComentarios())
        .catch(error => console.log(error));
    /*if (200 <= res.status && res.status <= 300) {
        obtenerComentarios();
    } else {
        if (res.status == 401) {
            //MANDARLO AL LOGIN (NO DE ESTA FORMA)
            const baseUrl = "http://localhost/TrabajoEspecialPair"; //hay que dinamizar esto
            window.location.href = baseUrl + "/login";
        }
    }*/
}