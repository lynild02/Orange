<!-- language: lang-php -->
<!--01001000 01100101 01100011 01101000 01101111 00100000 01110000 01101111 01110010 00100000 01000001 01101110 01100111 01100101 01101100 00100000 01100100 01100101 00100000 01001010 01100101 01110011 01110101 01110011 00100000 01000111 01101111 01101101 01100101 01111010 00100000 01001010 01110101 01100001 01110010 01100101 01111010 00101100 00100000 01001100 01111001 01101110 01101001 01101100 01100100 00110000 00110010-->
<?php

/* Code by David McKeown - craftedbydavid.com */

/* Editable entries are bellow */

$send_to = "info@orangepuebla.com";

$send_subject = "orangepuebla.com";

/*Be careful when editing below this line */



$f_name = cleanupentries($_POST["name"]);

$f_email = cleanupentries($_POST["mail"]);

$f_message = cleanupentries($_POST["message"]);

$f_tel = cleanupentries($_POST["tel"]);

$from_ip = $_SERVER['REMOTE_ADDR'];

$from_browser = $_SERVER['HTTP_USER_AGENT'];

function cleanupentries($entry) {

    $entry = trim($entry);

    $entry = stripslashes($entry);

    $entry = htmlspecialchars($entry);



    return $entry;

}

$message = "Este correo fue enviado el " . date('m-d-Y') .
"\n\nNombre: " . $f_name .
"\n\nE-Mail: " . $f_email .
"\n\nTelefono: " . $f_tel .
"\n\nMensage: \n" . $f_message .
"\n\n\nDetalles Tecnicos:\n" . $from_ip . "\n" . $from_browser;

$send_subject .= " - {$f_name}";

$headers = "From: " . $f_email . "\r\n" .

    "Reply-To: " . $f_email . "\r\n" .

    "X-Mailer: PHP/" . phpversion();

if (!$f_email) {

    echo "sin correo";

    exit;

}else if (!$f_name){

    echo "sin nombre";

    exit;

}else if (!$f_tel){

    echo "sin telefono";

    exit;

}else{

    if (filter_var($f_email, FILTER_VALIDATE_EMAIL)) {

        mail($send_to, $send_subject, $message, $headers);

        echo "true";

    }else{

        echo "invalid email";

        exit;

    }

}

?>
