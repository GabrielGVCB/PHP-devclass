<?php

require "../../../bootstrap.php";

if (isEmpty()) {
    flash('message', 'Preencha todos os campos!');

    header("location:/?page=contato");
    exit;
}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'mensagem' => 's',
]);

dd($validate->name);
