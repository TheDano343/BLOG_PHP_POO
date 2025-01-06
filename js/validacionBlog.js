const titulo = document.getElementById('titulo');
const descripcion = document.getElementById('descripcion');
const contenido = document.getElementById('contenido');
const imagen = document.getElementById('imagen');
const form = document.getElementById('form');

const titulo_error = document.getElementById('titulo_error');
const descripcion_error = document.getElementById('descripcion_error');
const contenido_error = document.getElementById('contenido_error');
const imagen_error = document.getElementById('imagen_error');

form.addEventListener('submit',(e)=>{
    if(titulo.value === '' || titulo.value == null)
    {
        e.preventDefault();
        titulo_error.innerHTML = "El Nombre es requerido";
    }

    if(descripcion.value === '' || descripcion.value == null)
    {
        e.preventDefault();
        descripcion_error.innerHTML = "La descripcion es requerida";
    }

    if(contenido.value === '' || contenido.value == null)
    {
        e.preventDefault();
        contenido_error.innerHTML = "El contenido es requerido";
    }

    if(imagen.value === '' || imagen.value == null)
    {
        e.preventDefault();
        imagen_error.innerHTML = "La imagen es requerida";
    }
});