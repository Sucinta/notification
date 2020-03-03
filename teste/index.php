<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "mail.sucinta.com.br", "smtp@sucinta.com.br", "um4Lw#QDfyiQ", "tls", "587", "smtp@sucinta.com.br", "Sucinta Treinamento");
$novoEmail->sendMail("Assunto de Teste", "<p>Email dé <b>teste</b>.</p>", "flavio@sucinta.com.br", "Flavio Sucinta", "flavio@sucinta.com.br", "Flavio");

var_dump($novoEmail);