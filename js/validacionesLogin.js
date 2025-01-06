const correo = document.getElementById("correo");
const contraseña = document.getElementById("contraseña");
const form = document.getElementById("form");
const parrafo = document.getElementById("warnings");

form.addEventListener("submit", e=>{
    let alertas = "";
    let entrar = false;
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    parrafo.innerHTML = "";

    if(!regexEmail.test(correo.value)){
        e.preventDefault();
        alertas += `Email no valido <br>`;
        entrar = true;
    }

    if(contraseña.value.length < 8)
    {
        e.preventDefault();
        alertas += `La contraseña no es valida <br>`;
        entrar = true;
    } 

    if(entrar)
    {
        parrafo.innerHTML = alertas;
    }else{
        parrafo.innerHTML = "Enviado";
    }
})