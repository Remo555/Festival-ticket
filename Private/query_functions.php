<?php
require_once  ("Initialize.php");

function find_all_klanten() {
    global $db;

    $sql = "SELECT * FROM klant ";

    $verbinding_set = mysqli_query($db, $sql);
    $klant = mysqli_fetch_assoc($verbinding_set);
    if (is_array($klant)) {
        return $klant;
    }

    return false;
}
function find_klant($email,$wachtwoord)
{
    global $db;

    $sql = "SELECT $email, $wachtwoord FROM klant";
    $sql .= "";
    $result = mysqli_query($db, $sql);

    $klanten = mysqli_fetch_assoc($result);
    return $klanten;
}

