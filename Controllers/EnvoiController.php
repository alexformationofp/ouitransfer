<?php

require "Models/Envoi.php";
if ($_FILES && $_FILES['img']) {
    
    if (!empty($_FILES['img']['name'][0])) {
        
        $zip = new ZipArchive();
        $zip_name = getcwd() . "/assets/transferts/transfert_" . time() . ".zip";
        
        // Create a zip target
        if ($zip->open($zip_name, ZipArchive::CREATE) !== TRUE) {
            $error .= "Sorry ZIP creation is not working currently.<br/>";
        }
        
        $imageCount = count($_FILES['img']['name']);
        for($i=0;$i<$imageCount;$i++) {
        
            if ($_FILES['img']['tmp_name'][$i] == '') {
                continue;
            }
            // $newname = date('YmdHis', time()) . mt_rand() . '.jpg';
           
            // Moving files to zip.
            $zip->addFromString($_FILES['img']['name'][$i], file_get_contents($_FILES['img']['tmp_name'][$i]));
            
            // moving files to the target folder.
            //move_uploaded_file($_FILES['img']['tmp_name'][$i], './uploads/' . $newname);
        }
        $zip->close();
        // Create HTML Link option to download zip
        $success = basename($zip_name);
       
    } else {
        $error = '<strong>Error!! </strong> Please select a file.';
    } 
    ajouterTransfert($success);
};

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX   ENVOI MAIL XXXXXXXXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

if(isset($_POST['emailExp']) && isset($_POST['emailDest'])){

$emailExp = $_POST['emailExp']; // Déclaration de l'adresse de destination.
$emailDest = $_POST['emailDest'];

// On filtre les serveurs qui présentent des bogues.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $emailDest)) {
    $passage_ligne = "\r\n";
}
else {
    $passage_ligne = "\n";
}

//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "";

$message_html = '<!doctype html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><title></title><!--[if !mso]><!-- --><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]--><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><style type="text/css">#outlook a { padding:0; }
body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
p { display:block;margin:13px 0; }</style><!--[if mso]>
<xml>
<o:OfficeDocumentSettings>
<o:AllowPNG/>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
<![endif]--><!--[if lte mso 11]>
<style type="text/css">
.mj-outlook-group-fix { width:100% !important; }
</style>
<![endif]--><style type="text/css">@media only screen and (min-width:480px) {
.mj-column-per-100 { width:100% !important; max-width: 100%; }
}</style><style type="text/css"></style></head><body><div><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td style="font-size:0px;padding:10px 25px;word-break:break-word;"><p style="border-top:solid 4px #F45E43;font-size:1;margin:0px auto;width:100%;"></p><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 4px #F45E43;font-size:1;margin:0px auto;width:550px;" role="presentation" width="550px" ><tr><td style="height:0;line-height:0;"> &nbsp;
</td></tr></table><![endif]--></td></tr><tr><td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;"><div style="font-family:helvetica;font-size:20px;line-height:1;text-align:left;color:#F45E43;">Hello World</div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></div></body></html>';

//=====Création de la boundary.
$boundary = "-----=".md5(rand());
$boundary_alt = "-----=".md5(rand());

//=====Définition du sujet.
$sujet = "Vous avez reçu des fichier via OuiTransfer";

//=====Création du header de l'e-mail.
$header = "From: <alexformationofp@gmail.com>".$passage_ligne;

$header.= "Reply-to: <alexformationofp@gmail.com>".$passage_ligne;

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
mail($emailDest,$sujet,$message,$header);

}




require "Views/EnvoiView.php";