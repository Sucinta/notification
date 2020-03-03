<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de Teste", "<p>Email dé <b>teste</b>.</p>", "flavio@sucinta.com.br", "Flavio Sucinta", "flavio@sucinta.com.br", "Flavio");

var_dump($novoEmail);