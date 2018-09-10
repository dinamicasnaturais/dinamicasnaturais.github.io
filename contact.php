<?php
$emailto     = 'paulogil@dinamicasnaturais.com';
$emailfrom   = 'pagina@dinamicasnaturais.com';
$subject     = 'Pedido de contacto - pagina dinamicas.pt';
$msg         = ">>> Nome: ".$_POST['name']." >>> Email: ". $_POST['email']." >>> Mensagem: ". $_POST['message'];
    
$success = mail($emailto, $subject, $msg);

if ($success) {
 header("Location: /email.html");
 exit;
} else {
 header("Location: /erro.html");
 exit;
}

?>