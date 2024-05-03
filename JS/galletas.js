const iniciarsesion=()=>{
    const usuario = document.getElementById('name');
    const email = document.getElementById('email');
    const contrasena = document.getElementById('pass');
    document.cookie = `Usuario=${usuario}; expired= Dec 2024 01:00:00 UTF`;
    document.cookie = `Email=${email}; expired= Dec 2024 01:00:00 UTF`;
    document.cookie = `Contraseña=${contrasena}; expired= Dec 2024 01:00:00 UTF`;
}

console.log(document.cookie);
