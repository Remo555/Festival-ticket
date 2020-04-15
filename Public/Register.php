
<link rel="stylesheet" type="text/css" href="Stylesheet/Stylesheet.css">
<div id="container">
<div id="form">
<form action="" method="post" id="Register">
    <div id="Text-register">
        <h3 id="Register" style="
    height: 0px;">Registreren</h3>
    </div>
    <div id="Email-text">Email :</div><input type="text" name="REmail" id="REmail">
    <br>
    <div id="Username-text">Username :</div><input type="text" name="RUserName" id="RUserName">
    <br>
    <div id="wachtwoord-text"> Password :</div><input type="password" name="RPassword" id="password">
    <br>
    <input id="button" type="submit" value="submit">
</form>
    </div>
        </div>
<?php
require_once('../Private/Initialize.php');
if (isset($_POST["RUserName"])) {
    if (!$_POST["RUserName"] == "" && !$_POST["RPassword"] == "" && !$_POST["REmail"] == "") {
        $Rusername = ($_POST["RUserName"]);
        $Rpassword = sha1($_POST["RPassword"]);
        $Remail = ($_POST["REmail"]);

        $sql = "SELECT * FROM `klantinlog` WHERE `Email` ='$Remail'";
        $res = mysqli_query($db, $sql);
        $count = mysqli_num_rows($res);

        $sql1 = "SELECT * FROM `klantinlog` WHERE `Username`='$Rusername'";
        $res1 = mysqli_query($db, $sql1);
        $count1 = mysqli_num_rows($res1);
        // Voeg gebruiker toe, want gebruiker bestaat nog niet.

        if ($count === 0 && $count1 === 0) {
            $query = "INSERT INTO `klantinlog` (`Username`, `Password`, `Email`)
                               VALUES ('$Rusername', '$Rpassword', '$Remail')";
            mysqli_query($db, $query);
            header('location: Login.php');
        } else {

            echo "dit Email en Username bestaat al!";
        }
    }
}