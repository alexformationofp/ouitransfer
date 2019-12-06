
let form = document.getElementById('formulaire');
let emaildest = document.getElementById('emailexpe');
let emailexpe = document.getElementById('emaildest');
let message = document.getElementById('message');


form.addEventListener("submit", function(e){
    e.preventDefault();
    
    
  if(!emaildest.value.match( /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)) {
    alert("Tapez un email valable");
    email.style.borderColor = "red";
    }
    else if (!emailexpe.value.match( /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)) {
        alert("Tapez un email valable");
        email.style.borderColor = "red";
    }
    else if (!message.value.match(/^[a-zA-Z ]+$/)) {
        alert("Pensez à taper un message !");
        message.style.borderColor = "red";
    }
    else if ((emaildest.value.match( /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/))&&(emailexpe.value.match( /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/))&&(message.value.match(/^[a-zA-Z ]+$/))){
        form.submit();
        console.log("form submitted");
    }
        else{
        alert("Veuillez remplir correctement tous les champs");
        };
});