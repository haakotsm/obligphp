<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
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
    <script rel="script" src="../scripts/regex.js"></script>
</head>
<nav class="nav navbar navbar-inverse bg-inverse">
    <h3 class="navbar-brand">HiOA Cinema</h3>
    <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
            <a class="nav-link" href="main.php">Hjem <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="oversikt.php">Bestillingsoversikt</a>
        </li>

    </ul>
</nav>
<div class="container-fluid my-4">
    <div class="jumbotron col-6 offset-3">
        <h4>Kundeinformasjon</h4>
        <form class="form-inline" action="confirm.php" method="post">
            <div class="form-group col-6 p-1">
                <label for="navn" class="form-control-label mx-1">Navn</label>
                <input type="text" name="navn" id="navn" maxlength="30" class="form-control col-12" required
                       oninput="checkString(this)">
            </div>
            <div class="form-group col-6 p-1">
                <label for="telefonnummer" class="form-control-label mx-1">Telefonnummer</label>
                <input type="tel" name="telefonnummer" maxlength="8" id="telefonnummer" class="form-control col-12" required
                       oninput="checkNum(this)">
            </div>
            <div class="form-group col-6 p-1">
                <label for="epost" class="form-control-label mx-1">Epost</label>
                <input type="email" name="epost" id="epost" maxlength="70" class="form-control col-12" required>
            </div>
            <div class="form-group col-4 p-1">
                <label for="billettype" class="form-control-label mx-1">Billettype</label>
                <select name="billettype" id="billettype" class="custom-select col-12">
                    <option value="vanlig">Vanlig</option>
                    <option value="sofa">Sofa</option>
                    <option value="billig">Billig</option>
                    <option value="seng">Seng</option>
                </select>
            </div>
            <div class="form-group col-2 p-1">
                <label for="antall" class="form-control-label mx-1">Antall</label>
                <input type="text" name="antall" id="antall" class="form-control col-12" required
                       oninput="checkNum(this)">
            </div>
            <div class="col-2 p-1 btn-group">
                <button class="btn btn-success" type="submit">Bekreft</button>
                <button class="btn btn-danger" type="reset">Avbryt</button>
            </div>
        </form>
    </div>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: hakon
 * Date: 28.03.2017
 * Time: 20.32
 */