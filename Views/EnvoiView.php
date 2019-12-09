<?php
require_once 'header.php';
?>
<!-- BACKGROUND -->
<div id="Clouds">
            <div class="Cloud Foreground"></div>
            <div class="Cloud Background"></div>
            <div class="Cloud Foreground"></div>
            <div class="Cloud Background"></div>
            <div class="Cloud Foreground"></div>
            <div class="Cloud Background"></div>
            <div class="Cloud Background"></div>
            <div class="Cloud Foreground"></div>
            <div class="Cloud Background"></div>
            <div class="Cloud Background"></div>
            <!--  <svg viewBox="0 0 40 24" class="Cloud"><use xlink:href="#Cloud"></use></svg>-->
        </div>
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="40px" height="24px" viewBox="0 0 40 24" enable- xml:space="preserve">
            <defs>
                <path id="Cloud" d="M33.85,14.388c-0.176,0-0.343,0.034-0.513,0.054c0.184-0.587,0.279-1.208,0.279-1.853c0-3.463-2.809-6.271-6.272-6.271
                c-0.38,0-0.752,0.039-1.113,0.104C24.874,2.677,21.293,0,17.083,0c-5.379,0-9.739,4.361-9.739,9.738
                c0,0.418,0.035,0.826,0.084,1.229c-0.375-0.069-0.761-0.11-1.155-0.11C2.811,10.856,0,13.665,0,17.126
                c0,3.467,2.811,6.275,6.272,6.275c0.214,0,27.156,0.109,27.577,0.109c2.519,0,4.56-2.043,4.56-4.562
                C38.409,16.43,36.368,14.388,33.85,14.388z"/>
            </defs>
        </svg>
<!-- ---------- -->
<!-- INTRO -->
        <img id="logo_titre" src="assets/images/titre-white.svg"></img>
        <div class="intro">
            <p>Envoyez vos fichiers les plus volumineux<br> en toute légèreté<br><i id="icon" class="fas fa-cloud"></i></p>
        </div>
<!-- FORMULAIRE -->
        <div class="formulaire">
            <h1>Envoyez votre fichier</h1>
            <form action="" method="post" enctype="multipart/form-data">
                
                <input type="file" id="file" name="img[]" multiple>
                <label for="file" class="bouton">Choisissez un fichier</label>
                <input type="text" name="field1" placeholder="Votre Adresse e-mail" />
                <input type="email" name="field2" placeholder="L'adresse mail du destinataire" />
                <textarea name="field3" placeholder="Ecrivez votre message (facultatif)" id="message"></textarea>

                <input type="submit" value="Envoyez" href="#popup1" />

            
            </form>
        </div>
<!-- ---------- -->
<!-- SOCIAL -->
        <div class="media">
            <div class="button">Share</div>
            <div class="social twitter">
                <a href="#" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <div class="social facebook">
                <i class="fab fa-facebook-f"></i>
            </div>
            <div class=" social google">
                <i class="fab fa-google"></i>
            </div>
            <div class="social youtube">
                <a href="#" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>  
              <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                  <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                    <feBlend in="SourceGraphic" in2="goo" />
                    </filter>
                </defs>
              </svg>
<!-- ---------- -->
    <script src="https://kit.fontawesome.com/c0eeb2702d.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>

<?php
require_once 'footer.php';
?>