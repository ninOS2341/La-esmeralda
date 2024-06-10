document.getElementById("btn-registrarse").addEventListener("click", registro);
document.getElementById("btn-iniciar-sesion").addEventListener("click", iniciarSesion);
window.addEventListener("resize", anchoPagina);

//Declaración de variables

let contenedor_log_reg = document.querySelector(".contenedor-log-reg");
let form_log = document.querySelector(".form-log");
let form_reg = document.querySelector(".form-reg");
let caja_trasera_login = document.querySelector(".caja-trasera-login");
let caja_trasera_reg = document.querySelector(".caja-trasera-register");

function anchoPagina() {
    if(window.innerWidth > 850){
        caja_trasera_login.style.display = "block";
        caja_trasera_reg.style.display = "block";
    }
    else{
        caja_trasera_reg.style.display = "block";
        caja_trasera_reg.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        form_log.style.display = "block";
        form_reg.style.display = "none";
        contenedor_log_reg.style.left = "0px";
    }
};

anchoPagina();

function iniciarSesion() {

    if(window.innerWidth > 850){
        form_reg.style.display = "none";
        contenedor_log_reg.style.left = "10px";
        form_log.style.display = "block";
        caja_trasera_reg.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    }
    else{
        form_reg.style.display = "none";
        contenedor_log_reg.style.left = "0px";
        form_log.style.display = "block";
        caja_trasera_reg.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
};

function registro() {

    if(window.innerWidth > 850){
        form_reg.style.display = "block";
        contenedor_log_reg.style.left = "410px";
        form_log.style.display = "none";
        caja_trasera_reg.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    }
    else{
        form_reg.style.display = "block";
        contenedor_log_reg.style.left = "0px";
        form_log.style.display = "none";
        caja_trasera_reg.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
    }
};