// Registro
const nombre = document.getElementById('nombre');
const correo = document.getElementById('correo');
const contraseña = document.getElementById('contraseña');
const form = document.getElementById('form');

// Registro errores
const nombre_error = document.getElementById('nombre_error');
const email_error = document.getElementById('correo_error');
const contraseña_error = document.getElementById('contrasena_error');

let checkEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

form.addEventListener("submit", (e) =>{
    let mensajes = [];

    if(nombre.value === '' || nombre.value == null)
    {
        e.preventDefault();
        nombre_error.innerHTML = 'Se requiere el nombre';
    }

    if(correo.value === '' || correo.value == null)
    {
        e.preventDefault();
        nombre_error.innerHTML = 'Se requiere el nombre';
    }

    if(!correo.value.match(checkEmail))
    {
        e.preventDefault();
        email_error.innerHTML = 'No cuenta como formato de correo';        
    }
    else
    {
        email_error.innerHTML = "";
    }

    if(contraseña.value === '' || contraseña.value == null)
    {
        contraseña_error.innerHTML = 'Se requiere el nombre';

    }

    if(contraseña.value.length <= 6)
    {
        e.preventDefault();
        contraseña_error.innerHTML = 'La contraseña tiene menos de 6 numeros';
    }  
})
