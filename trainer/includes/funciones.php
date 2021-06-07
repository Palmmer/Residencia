<?php

require 'app.php';

function incluirTemplate(string $nombre, bool $inicio = false, bool $login = false)
{
    include TEMPLATES_URL . "/${nombre}.php";
}