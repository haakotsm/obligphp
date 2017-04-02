<!DOCTYPE html>
<?php session_start() ?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
          crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>
</head>
<nav class="nav navbar navbar-inverse bg-inverse">
    <h3 class="navbar-brand">HiOA Cinema</h3>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="main.php">Hjem <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="oversikt.php">Bestillingsoversikt</a>
        </li>

    </ul>
</nav>
<?php
include_once("../classes/Kunde.php");
include_once("../classes/Database.php");
if ($_POST) {
    $_SESSION['navn'] = $_POST['navn'];
    $_SESSION['epost'] = $_POST['epost'];
    $_SESSION['telefonnummer'] = $_POST['telefonnummer'];
    $_SESSION['billettype'] = $_POST['billettype'];
    $_SESSION['antall'] = $_POST['antall'];
}
$kunde = new Kunde($_SESSION['navn'], $_SESSION['epost'], $_SESSION['telefonnummer'], new Bestilling($_SESSION['billettype'], $_SESSION['antall']));
?>
<div class="container-fluid my-4">
    <div class="jumbotron col-6 offset-3">
        <h4>Kundeinformasjon</h4>
        <form action="" method="get">
            <?php echo $kunde ?>
            <label for="bekreft">Bekreft bestilling</label>
            <input type="checkbox" class="custom-checkbox" name="bekreft" id="bekreft" required>
            <div class="btn-group">
                <button class="btn btn-success" type="submit" name="bestill" id="bestill">Bestill</button>
                <a href="main.php" class="btn btn-danger">Avbryt</a>
            </div>
        </form>
    </div>
</div>
<?php

if (isset($_GET['bekreft'])) {
    if (isset($_GET['bestill'])) {
        $db = new Database();
        $res = $db->insertKunde($kunde);
        if (!$res) {
            ?>
            <div class="alert alert-danger">
                <?php
                echo "Feil, klarte ikke å sette inn data" . mysqli_error($db->getConn());
                ?>
            </div>
            <?php
        } elseif (mysqli_affected_rows($db->getConn()) == 0) {
            ?>
            <div class="alert alert-danger">
                <?php
                echo "Feil, ingen rader er satt inn";
                ?>
            </div>
            <?php
        }

    }
}
/**
 * Created by PhpStorm.
 * User: hakon
 * Date: 28.03.2017
 * Time: 20.32
 */