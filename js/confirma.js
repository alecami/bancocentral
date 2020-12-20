function confirma(evento){
     if(confirm(" Confirma la eliminacion del resgistro seleccionado ?")){
          return true;
     } else {
          evento.preventDefault(); 
     }
}

let linkBorrar = document.querySelectorAll("boton-chico");
for (var recorre = 0; recorre < linkBorrar.length; recorre++) {
     linkBorrar[recorre].addEventListener('click', confirma);
}
