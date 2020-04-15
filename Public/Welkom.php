<link rel="stylesheet" type="text/css" href="Stylesheet/Stylesheet.css">

<link rel="stylesheet" type="text/css" href="Stylesheet/Stylesheet.css">
<div id="container">
    <div id="Rightbar"></div>
    <div id="Leftbar"></div>
    <div id="topbar">
        <div id="Text-align">
            <a id="hyperlink-Home" href="Index.php">Home</a>
            <a id="hyperlink-Menu" href="Index.php">Menu</a>
            <a id="hyperlink-Menu" href="Index.php">Profiel</a>
            <a id="hyperlink-Inloggen" href="Login.php">Uitloggen</a>
        </div>
    </div>
    <h1 id="Bestel">Bestel hier uw tickets</h1>
    <form id="MiddleBestel" action="Welkom.php" method="post">
        Naam :<input type="text" name="naam" value="" />
        <br>
        Ticket Type :<select name="ticket">
            <option name="Basic" value="Basic">Basic (€40,-)</option>
            <option name="Premium" value="Premium">Premium €60,-)</option>
            <option name="VIP" value="VIP">VIP (€100,-)</option>
        </select>
        <br>
        <input type="submit" value="Submit" /><br>
    </form>
</div>



<?php

require_once('../Private/Initialize.php');
require_once ('../Private/query_functions.php');
$klanten_set = find_all_klanten();

if(isset($_POST["naam"])) {
    if (!$_POST["naam"] == "") {
        $naam = $_POST['naam'];
        $ticket = $_POST['ticket'];


        if ($_POST['ticket'] == $_POST['Basic']) {
            $query = "INSERT INTO `bestellingen` (`Datum`, `Klantnaam`, `Ticketsoort`, `Totaalprijs`)
                               VALUES ( date(), '$naam', '$ticket','40')";
            mysqli_query($db, $query);
        }
        if ($_POST['ticket'] == $_POST['Premium']) {
            $query = "INSERT INTO `bestellingen` (`Datum`, `Klantnaam`, `Ticketsoort`, `Totaalprijs`)
                               VALUES (date(), '$naam', '$ticket', '60')";
            mysqli_query($db, $query);
        }
        if ($_POST['ticket'] == $_POST['VIP']) {
            $query = "INSERT INTO `bestellingen` (`Datum`, `Klantnaam`, `Ticketsoort`, `Totaalprijs`)
                               VALUES (date(), '$naam', '$ticket', '100')";
            mysqli_query($db, $query);
        }
    }
}
?>