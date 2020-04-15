<?php
require_once ('Initialize.php');
require_once('db_credentials.php');

function db_verbinden()
{
    $verbinden = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("cant connect");
    return $verbinden;
}


function db_verbreken($verbinding)
{
    if (isset($verbinding)) {
        mysqli_close($verbinding);
    }
}
