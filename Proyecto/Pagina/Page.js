
function validar() {
   var expresion2 =/\w+@\w+\.+[a-z]/;
   var NU= document.getElementById(NU).value;
   var NC= document.getElementById(NC).value;
   var CC= document.getElementById(CC).value;
   var CE= document.getElementById(CE).value;
   if(NU === "" || NC === "" ||CC === "" || CE=== ""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if (!expresion2.test(CE)){
    alert("El correo no es válido. Ej: nombre@hotmail.com");
    return false;
    }

  }
function validar_login(){
    var usuario= document.getElementById(usuario).value;
    var contraseña= document.getElementById(contraseña).value;
    if(usuario===""||contraseña===""){
         alert("Todos los campos son obligatorios");
        return false;
    }

}
 function validar_contacto(){
    var nu= document.getElementById(nu).value;
    var ni= document.getElementById(ni).value;
    var em= document.getElementById(em).value;
    if(nu==="" || ni==="" || em===""){
         alert("Todos los campos son obligatorios");
        return false;
    }

 }
