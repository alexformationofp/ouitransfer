<?php
require_once 'header.php';
?>
<div class="container centrage">
    <div class="col">
        <div class="intro introreception">
            <a href="http://ouitransfer.alexandre-bielinski.fr"><img id="logo_titre" src="assets/images/titre-white.svg"></a>
            <p>Réceptionnez vos fichiers les plus volumineux en toute légèreté</p>
        </div>
    </div>
    <div class="col">
        <!-- FORMULAIRE -->
        <div class="retour">
            <h1 class="titre-retour"><?php echo $message['expediteur']; ?><br>vous a envoyé un transfert</h1>
            <p><?php echo $message['message']; ?></p>
            <a href="http://ouitransfer.alexandre-bielinski.fr//assets/transferts/<?php echo $transfert ?>">Téléchargez ici</a>
            <p>Téléchargement disponible jusqu'au :<br><?php echo $dateFin; ?></p>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>