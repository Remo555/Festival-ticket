<link rel="stylesheet" type="text/css" href="Stylesheet/Stylesheet.css">
<div id="container">
    <form action="Login.php" method="post" id="Login">
        <div id="Text-login">
            <h3 id="Inlog">Inloggen!</h3>
        </div>

        Username :<input type="text" name="UserName" id="RUserName">
        <br>
        <div id="wachtwoord-text"> Password :</div><input type="password" name="Password" id="password">
        <br>
        <input id="button" type="submit" value="submit">
    </form>
    <a id="Register-hyperlink" href="Register.php">Acount aanmaken.</a>




    <?php
    require_once('../Private/Initialize.php');

    if (isset($_POST["UserName"])) {
    $username = ($_POST['UserName']);
    $password = sha1($_POST['Password']);

    $sql = "SELECT * FROM `klantinlog` WHERE `Username` = '$username' AND `Password` = '$password'" ;
    $res = mysqli_query($db, $sql);
    $count = mysqli_num_rows($res);

    if ($count === 1) {
        $_SESSION['UserName'] = $username;
        header('location: Welkom.php');
    } else {
    ?> <div id="User-exist-text"> <?php echo "User does not exist";
        ?> </div> </div> <?php
}
}

