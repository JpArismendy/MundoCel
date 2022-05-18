function validate(e) {
    e.preventDefault();
    formulario  = document.getElementById('form');
    nombre      = document.getElementById('txtNombre');
    apellido    = document.getElementById('txtApellido');
    usuario     = document.getElementById('txtUsuario');
    clave       = document.getElementById('txtClave');


    lVali = true;

    if (nombre.value==""){
        nombre.style.borderColor="red";
        ohSnap('Ingresar El Nombre...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;          
    }
    if (apellido.value==""){
        apellido.style.borderColor="red";
        ohSnap('Ingresar El Apellido...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;          
    }
    if (usuario.value==""){
        usuario.style.borderColor="red";
        ohSnap('Ingresar El Usuario...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;          
    }
    if (clave.value==""){
        clave.style.borderColor="red";
        ohSnap('Ingresar La Clave...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;          
    }

    if (lVali==true){
        formulario.submit();

    }
}
function validateModify(e) {
    e.preventDefault();
    formulario  = document.getElementById('formModificar');
    nombre      = document.getElementById('txtNombreM');
    apellido    = document.getElementById('txtApellidoM');
    usuario     = document.getElementById('txtUsuarioM');
    clave       = document.getElementById('txtClaveM');


    lVali = true;

    if (nombre.value==""){
        nombre.style.borderColor="red";
        ohSnap('Ingresar El Nombre...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;          
    }
    if (apellido.value==""){
        apellido.style.borderColor="red";
        ohSnap('Ingresar El Apellido...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;          
    }
    if (usuario.value==""){
        usuario.style.borderColor="red";
        ohSnap('Ingresar El Usuario...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;          
    }
    if (clave.value==""){
        clave.style.borderColor="red";
        ohSnap('Ingresar La Clave...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;          
    }

    if (lVali==true){
        formulario.submit();

    }
}
