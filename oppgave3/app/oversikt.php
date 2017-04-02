<?php session_start();
include_once('../classes/Database.php');
?>
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
            <li class="nav-item">
                <a class="nav-link" href="main.php">Hjem </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="oversikt.php">Bestillingsoversikt <span class="sr-only">(current)</span></a>
            </li>

        </ul>
    </nav>
    <div class="container-fluid my-4">
        <div class="jumbotron col-6 offset-3">
            <h4>Bestillinger</h4>
            <?php
            $db = new Database();
            $res = $db->getBestillinger();
            if (!$res || $res->num_rows === 0) {
                ?>
                <div class="alert alert-danger">
                    <?php
                    echo "Ingen Bestillinger"
                    ?>
                </div>
                <?php
            } else {
                while ($row = $res->fetch_row()) {
                    ?>
                    <div class="alert alert-info">
                        <?php
                        echo 'Navn: '.$row[1]. ', Epost: ' .$row[2]. ', Telefonnummer: ' . $row[3]
                        . '<br>Billettype: '.$row[4] . ', Antall: '. $row[5]. ', Dato: '. $row[6]
                        ?>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
<?php
/**
 * Created by PhpStorm.
 * User: hakon
 * Date: 28.03.2017
 * Time: 20.32
 */