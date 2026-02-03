<?php

require "../../../bootstrap.php";

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'mensagem' => 's',
]);

dd($validate->mensagem);
