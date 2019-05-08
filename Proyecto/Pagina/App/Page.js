/**
 * [Declaracion Variables]
 */

var ListaGustos = [];
var ListaSUGustos = [];
var ListaUsuario=[];
var ListaNombres = ['Waffles Glaseados', 'Ensalada De frutas', 'Yogurt Artesanal', 'Empanada']
var num = 1;
var xd = 1;


/**
 * [Funcion rechazar cambia postre]
 */

function rechazar() {
    num++;
    if (num > 4)
        num = 1;
    var pic = document.getElementById("IMGPostre");
    var namex = document.getElementById("nombresinho");
    namex.innerHTML = ListaNombres[xd];
    xd++;
    if (xd > 3)
        xd = 0;
    pic.src = "foto" + num + ".jpg";

}



/**
 * [Funcion gustar cambia postre]
 * [return lista postres gustados tamaño]
 */


function gustos() {
    num++;
    if (num > 4)
        num = 1;
    var pic = document.getElementById("IMGPostre");
    var namex = document.getElementById("nombresinho");
    namex.innerHTML = ListaNombres[xd];
    xd++;
    if (xd > 3)
        xd = 0;
    ListaGustos.unshift(pic);
    pic.src = "foto" + num + ".jpg";
    console.log(ListaGustos.length)
}

/**
 * [Funcion super gustar cambia postre]
 * [return lista postres super gustados tamaño]
 */


function SGustos() {
    num++;
    if (num > 4)
        num = 1;
    var pic = document.getElementById("IMGPostre");
    var namex = document.getElementById("nombresinho");
    namex.innerHTML = ListaNombres[xd];
    xd++;
    if (xd > 3)
        xd = 0;
    ListaSUGustos.unshift(pic);
    pic.src = "foto" + num + ".jpg";
    console.log(ListaSUGustos.length)
}

/**
 * [Funcion retornar gustos]
 * [return gustos como string]
 */

function devolvgustos(){
    return ListaGustos.length.toString
}



/**
 * [Funcion Validar correo]
 * [return alerta correo no funciona]

function validar() {
    var expresion2 = /\w+@\w+\.+[a-z]/;
    var NU = document.getElementById(NU).value;
    var NC = document.getElementById(NC).value;
    var CC = document.getElementById(CC).value;
    var CE = document.getElementById(CE).value;
    if (NU === "" || NC === "" || CC === "" || CE === "") {
        alert("Todos los campos son obligatorios");
        return false;
    } else if (!expresion2.test(CE)) {
        alert("El correo no es válido. Ej: nombre@hotmail.com");
        return false;
    }

}

/**
 * [Funcion validar login]

function validar_login() {
    var usuario = document.getElementById(usuario).value;
    var contraseña = document.getElementById(contraseña).value;
    if (usuario === "" || contraseña === "") {
        alert("Todos los campos son obligatorios");
        return false;
    }

}

/**
 * [Funcion validar contacto]
function validar_contacto() {
    var nu = document.getElementById(nu).value;
    var ni = document.getElementById(ni).value;
    var em = document.getElementById(em).value;
    if (nu === "" || ni === "" || em === "") {
        alert("Todos los campos son obligatorios");
        return false;
    }

*/


/**
 * [Funcion validar contacto]
 */

 function validacion() {
     var nombreUsuario = document.getElementById("name").value;
     var contraseñaUsuario = document.getElementById("contraseña").value;
     var caracteresNombre = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
     if (nombreUsuario.length === 0 || /^\s+$/.test(nombreUsuario)) {
         alert('El campo de nombre esta vacio!');

     } else if (nombreUsuario.length > 0 && nombreUsuario.match(caracteresNombre) === null) {
         alert('El nombre debe tener solo letras');

     } else if (contraseñaUsuario.length == 0 || /^\s+$/.test(contraseñaUsuario)) {
         alert('El campo de contraseña esta vacio!');

     } else if (contraseñaUsuario.length > 0 && contraseñaUsuario.length < 4) {
         alert('El campo de contraseña debe contener minimo 4 caracteres!')
     }else{
         document.formulogin.submit();
     }
     return true;
 }


 function Usuario(){
    var nombreUsuario = document.getElementById("name").value;
    ListaUsuario.unshift(nombreUsuario);
    return ListaUsuario;

}

function Final(){
document.getElementById("demo1").innerHTML = ListaGustos[0].toString;
document.getElementById("demo2").innerHTML = ListaGustos.size().toString;
document.getElementById("demo3").innerHTML = ListaSUGustos.size().toString;

}


