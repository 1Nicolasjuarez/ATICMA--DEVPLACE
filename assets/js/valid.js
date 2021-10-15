
const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
const selects = document.querySelectorAll('#formulario select');
const contacto = document.querySelectorAll('#formulario textarea');

const expresiones = {
	nom_apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  textarea : /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
}


const campos = {
	nombre: false,
	apellido: false,
	email: false,
  contacto:false,
  provincia:false
}

const validarFormulario= (e) =>{

  switch(e.target.name){

    case "nombre":
      validarInputs(expresiones.nom_apellido,e.target,'nombre');
    break;

    case "apellido":
      validarInputs(expresiones.nom_apellido,e.target,'apellido');
  break;
  case "email":
    validarInputs(expresiones.email,e.target,'email');
  break;

  case "contacto":
    validarTextareas(expresiones.textarea,e.target,'contacto');
  break;

  case "provincia":

    validarSelect(e.target,'provincia');
    
  break;

  }


}


const validarInputs = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;

	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}



const validarTextareas= (expresion, textarea, campo) => {
	if(expresion.test(textarea.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__textarea-error`).classList.remove('formulario__textarea-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__textarea-error`).classList.add('formulario__textarea-error-activo');
		campos[campo] = false;
	}
}

const validarSelect= (select,campo) =>{

  if(select.value=="")
      {
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} .formulario__select-error`).classList.add('formulario__select-error-activo');
        campos[campo] = false;
      }
      else
      {      
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__select-error`).classList.remove('formulario__select-error-activo');
        
        campos[campo] = true;  
      }


}



inputs.forEach((input)=> {

      input.addEventListener('keyup',validarFormulario);
      input.addEventListener('blur',validarFormulario);
});

contacto.forEach((textarea)=> {

  textarea.addEventListener('keyup',validarFormulario);
  textarea.addEventListener('blur',validarFormulario);

});


selects.forEach((select)=> {

  select.addEventListener('keyup',validarFormulario);
  select.addEventListener('blur',validarFormulario);
});



formulario.addEventListener('submit',(e) => {
  e.preventDefault();

  console.log(campos);

  if(campos.nombre && campos.apellido && campos.email && campos.contacto && campos.provincia)
  {
    
    formulario.reset();

    document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo')

    setTimeout(()=> {

    document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo')

    },2000)

    document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
    /*document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');*/
    
    Swal.fire({
      title: 'Formulario enviado!',
      text: 'pronto nos comunicaremos con usted, muchas gracias.',
      icon: 'success',
      confirmButtonText: 'ok'
    })
    
  }
   else {
		/*document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');*/
    Swal.fire({
      title: 'Error!',
      text: 'Por favor complete los campos faltantes',
      icon: 'error',
      confirmButtonText: 'ok'
    })
	}


  

});