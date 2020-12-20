function validar(){
    var nombre,elusuario,documentonumero,telefono;
     var domicilio,localidad,correo,clave1,clave2;
     nombre = document.getElementById("nombre").value;
     elusuario = document.getElementById("elusuario").value;
     documentonumero = document.getElementById("documentonumero").value;
     telefono = document.getElementById("telefono").value;
     domicilio = document.getElementById("domicilio").value;
     localidad = document.getElementById("localidad").value;
     correo = document.getElementById("correo").value;
     clave1 = document.getElementById("clave1").value;
     clave2 = document.getElementById("clave2").value;
     if(nombre === "" || elusuario === "" || documentonumero === "" || telefono === "" || domicilio === "" || localidad === "" || correo  === "" || clave1 === "" || clave2 === ""){
        alert("Todos los campos son obligatorios - Completelos antes de presionar 'GENERAR USUARIO'");
        return false;
     }
     else if(nombre.length>50){
          alert("El campo NOMBRE no debe superar los 50 caracteres");
          return false;
     }
     else if(elusuario.length>30){
          alert("El campo USUARIO no debe superar los 30 caracteres");
          return false;
     }
     else if(documentonumero.length>50){
          alert("El campo NUMERO DE DOCUMENTO no debe superar los 8 digitos");
          return false;
     }
     else if(telefono.length>50){
          alert("El campo TELEFONO no debe superar los 20 digitos");
          return false;
     }
     else if(domicilio.length>50){
          alert("El campo DOMICILIO no debe superar los 50 caracteres");
          return false;
     }
     else if(localidad.length>50){
          alert("El campo LOCALIDAD no debe superar los 50 caracteres");
          return false;
     }
     else if(correo.length>50){
          alert("El campo CORREO no debe superar los 50 caracteres");
          return false;
     }
     else if(clave1.length>20){
          alert("El campo CLAVE no debe superar los 20 caracteres");
          return false;
     }
     else if(clave2.length>50){
          alert("El campo REPITE CLAVE no debe superar los 20 caracteres");
          return false;
     }
}
