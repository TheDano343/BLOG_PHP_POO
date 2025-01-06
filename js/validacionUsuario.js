const nombre = document.getElementById("nombre");
const contraseña = document.getElementById("contraseña");
const form = document.getElementById("form");

const nombre_error = document.getElementById('nombre_error');
const contraseña_error = document.getElementById('contraseña_error');

form.addEventListener("submit", e=>{

    if(nombre.value === '' || nombre.value == null)
    {
        e.preventDefault();
        nombre_error.innerHTML = 'Nombre requerido';
    }

    if(correo.value === '' || correo.value == null)
    {
        e.preventDefault();
        contraseña_error.innerHTML = 'Email requerido';
    }

})