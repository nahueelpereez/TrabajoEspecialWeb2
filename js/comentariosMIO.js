"use strict"

let app = new Vue({
    el: '#template-vue-comentarios',
    data: {
        comments: []  
    }
});

document.addEventListener('DOMContentLoaded', () => {
    obtenerComentarios();

    document.querySelector('#form-comentarios').addEventListener('submit', e => {
        // evita el envio del form default
        e.preventDefault();

        agregarComentarios();
    });

});

function obtenerComentarios() {
    fetch('api/comentarios')
        .then(response => response.json())
        .then(comentarios => app.comments = comentarios)
        .catch(error => console.log(error));
}

function getProductId() {
    let params = window.location.href.split("/");
    return params[parseInt(params.length) - 1];
}


function agregarComentarios() {
    let contenido = document.querySelector('input[name="contenido"]').value;
    let puntuacion = document.querySelector('input[name="puntuacion"]').value;
    let usuario = document.querySelector('input[name="usuario"]').value
    let producto = getProductId();

    const comment = {
        contenido: contenido,
        puntuacion: puntuacion,
        id_usuario: usuario,
        id_producto: producto,
    }

    fetch('api/comentarios', {
        method: 'POST',
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(comment)
    })
        .then(response => response.json())
        //.then(comment => app.comment.push(comment))
        .catch(error => console.log(error));

}
