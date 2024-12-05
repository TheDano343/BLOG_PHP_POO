const titulo = document.getElementById('titulo')
const descripcion = document.getElementById('descripcion')
const contenido = document.getElementById('contenido')
const Imagen = document.getElementById('Imagen')

// const form = document.getElementById('form')

const titulo_error = document.getElementById('titulo_error')
const descripcion_error = document.getElementById('descripcion_error')
const contenido_error = document.getElementById('contenido_error')
const imagen_error = document.getElementById('imagen_error')

// form.addEventListener('submit', (e)=>
document.getElementById('form').addEventListener('submit',function(e)
{

    if(titulo.value === '' || titulo.value == null)
        {
            e.preventDefault();
            titulo_error.innerHTML = 'Se requiere titulo';
        }
        else
        {
            titulo_error.innerHTML = "";
        }

    if(descripcion.value === '' || descripcion.value == null)
        {
            e.preventDefault();
            descripcion_error.innerHTML = 'Se requiere descripción';
        }
        else
        {
            descripcion_error.innerHTML = "";
        }

    if(contenido.value === '' || contenido.value == null)
        {
            e.preventDefault();
            contenido_error.innerHTML = 'Se requiere contenido';
        }
        else
        {
            contenido_error.innerHTML = "";
        }

    if(Imagen.value === '' || Imagen.value == null)
        {
            e.preventDefault();
            imagen_error.innerHTML = 'Se require imagen';
        }
        else
        {
            imagen_error.innerHTML = "";
        }

})