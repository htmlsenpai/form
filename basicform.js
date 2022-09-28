// CONTROL PRINCIPAL 
// los inputs no pueden estar vacios

// CONTROL SECUNDARIO
// el email debe ser de formato correcto (..@gmail.com)
// el usuario/correo debe de ser único
// la contraseña debe tener una longitud determinada
// la contraseña debe de tener un formato que lo indiquemos
// longitud minima de 8 caracteres
// debe contener al menos una mayuscula y un numero
// GUARDAR LA CONTRASÉÑA CIFRADA EN LA DB


// input 



const btn = document.getElementById('button');

const validate = (e) => {
  e.preventDefault();
  const username = document.getElementById('user');
  const email = document.getElementById('email');
  const pass = document.getElementById('pass1');
  const emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (user.value === "") {
    alert("Please type down your username.");
    user.focus();
    document.getElementById("warning").innerHTML= "Type an username!"
    return false;
  }

  if (!email.value.match(emailFormat)) {
    alert("Please, make sure to write down a correct email address.");
    email.focus();
    document.getElementById("warning").innerHTML= "Remember the email!"
    return false;
  }

  if(pass.value=='' || pass>1 || pass<=7) {

    alert("Password must reach a minimum of eight characters.");
    document.getElementById("warning").innerHTML= "Password min: 8!"
    return false;

  }

  return true;

}

btn.addEventListener('click', validate);

