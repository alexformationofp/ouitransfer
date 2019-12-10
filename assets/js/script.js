$(".button").click(function(){
    $(".social.twitter").toggleClass("clicked");
    $(".social.facebook").toggleClass("clicked");
   $(".social.google").toggleClass("clicked");
    $(".social.youtube").toggleClass("clicked");
  })

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






// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

