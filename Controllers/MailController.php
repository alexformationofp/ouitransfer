<?php
if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['whoami'])){

$mail = $_POST['email']; // Déclaration de l'adresse de destination.

// On filtre les serveurs qui présentent des bogues.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) {
    $passage_ligne = "\r\n";
}
else {
    $passage_ligne = "\n";
}

//=====Déclaration des messages au format texte et au format HTML.
$message_txt = $_POST['whoami']." vous a envoyé une carte de voeux !".$passage_ligne."Suivez ce lien pour la voir :".$passage_ligne."https://lucasv.promo-24.codeur.online/carte-de-voeux/";

$message_html = '<!doctype html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><title></title><!--[if !mso]><!-- --><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]--><meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><style type="text/css">#outlook a { padding:0; }
.ReadMsgBody { width:100%; }
.ExternalClass { width:100%; }
.ExternalClass * { line-height:100%; }
body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
p { display:block;margin:13px 0; }</style><!--[if !mso]><!--><style type="text/css">@media only screen and (max-width:480px) {
  @-ms-viewport { width:320px; }
  @viewport { width:320px; }
}</style><!--<![endif]--><!--[if mso]>
<xml>
<o:OfficeDocumentSettings>
<o:AllowPNG/>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
<![endif]--><!--[if lte mso 11]>
<style type="text/css">
.outlook-group-fix { width:100% !important; }
</style>
<![endif]--><!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css"><style type="text/css">@import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);</style><!--<![endif]--><style type="text/css">@media only screen and (min-width:480px) {
.mj-column-per-100 { width:100% !important; max-width: 100%; }
}</style><style type="text/css"></style></head><body style="background-color:#d7dde5;"><div style="background-color:#d7dde5;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"><tbody><tr><td><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:middle;width:600px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:middle;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color:#f2f6f9;vertical-align:middle;" width="100%"><tr><td align="center" style="font-size:0px;padding:10px 25px;padding-top:50px;padding-bottom:50px;word-break:break-word;"><div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:14px;line-height:1;text-align:center;color:#45474e;">'.$_POST["whoami"].' vous souhaite un joyeux Noël !</div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:url("https://lucasv.promo-24.codeur.online/carte-de-voeux/img/thumbail_cdv.png") top center / cover no-repeat;width:100%;"><tbody><tr><td><!--[if mso | IE]><v:rect style="mso-width-percent:1000;" xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false"><v:fill origin="0.5, 0" position="0.5, 0" src="https://lucasv.promo-24.codeur.online/carte-de-voeux/img/thumbail_cdv.png" type="tile" /><v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0"><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="Margin:0px auto;max-width:600px;"><div style="line-height:0;font-size:0;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:middle;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:middle;width:600px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:middle;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:middle;" width="100%"><tr><td align="center" style="font-size:0px;padding:10px 25px;padding-top:45;padding-bottom:10px;word-break:break-word;"><div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:14px;line-height:1;text-align:center;color:#45474e;"><span style="font-size: 30px; line-height: 30px;">Vous avez reçu une carte de voeux animée</span><br><br>Cliquez sur le bouton ci-dessous pour la voir !</div></td></tr><tr><td align="center" vertical-align="middle" style="font-size:0px;padding:10px 25px;padding-top:10;padding-bottom:45px;word-break:break-word;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;"><tr><td align="center" bgcolor="#e85034" role="presentation" style="border:none;border-radius:24px;cursor:auto;padding:10px 25px;" valign="middle">
    <div style="background:#e85034;color:#fff;font-family:Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif;font-size:13px;font-weight:normal;line-height:120%;Margin:0;text-decoration:none;text-transform:none;">
    <a style="text-decoration:none;" href="https://lucasv.promo-24.codeur.online/carte-de-voeux/" target="_blank">CLIQUEZ ICI</a></div>
    </td></tr></table></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div></div><!--[if mso | IE]></td></tr></table></v:textbox></v:rect><![endif]--></td></tr></tbody></table><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#e85034;background-color:#e85034;width:100%;"><tbody><tr><td><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:middle;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:middle;width:600px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:middle;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:middle;" width="100%"><tr><td align="center" style="font-size:0px;padding:10px 25px;padding-top:25;padding-bottom:10px;word-break:break-word;"><div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:18px;line-height:1;text-align:center;color:#ffffff;">Comment ai-je reçu cette carte ?</div></td></tr><tr><td style="font-size:0px;padding:10px 25px;padding-top:20;padding-right:100px;padding-bottom:20px;padding-left:100px;word-break:break-word;"><p style="border-top:solid 1px #fff;font-size:1;margin:0px auto;width:100%;"></p><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 1px #fff;font-size:1;margin:0px auto;width:400px;" role="presentation" width="400px" ><tr><td style="height:0;line-height:0;"> &nbsp;
</td></tr></table><![endif]--></td></tr><tr><td align="center" style="font-size:0px;padding:10px 25px;padding-top:20;padding-bottom:25px;word-break:break-word;"><div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:11px;line-height:1.2em;text-align:center;color:#f8d5d1;">Surprenez vos amis en envoyant une carte de Noël animée ! Pour le faire, il suffit de cliquer sur le lien suivant : <a href="https://lucasv.promo-24.codeur.online/carte-de-voeux/card.php" target="_blank">lucasv.promo-24.codeur.online/carte-de-voeux</a>, puis de renseigner votre nom, l\'adresse email de votre destinataire, et son nom. JOYEUX NOEL !</div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div></body></html>';

//=====Création de la boundary.
$boundary = "-----=".md5(rand());
$boundary_alt = "-----=".md5(rand());

//=====Définition du sujet.
$sujet = $_POST['whoami']." vous a envoyé une carte de voeux !";

//=====Création du header de l'e-mail.
$header = "From: <lucas.v@codeur.online>".$passage_ligne;

$header.= "Reply-to: <lucas.v@codeur.online>".$passage_ligne;

$header.= "MIME-Version: 1.0".$passage_ligne;

$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;

$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;

$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;

//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;


//=====Ajout du message au format HTML.
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;

//=====On ferme la boundary alternative.
$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;

//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;

//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);

}
?>