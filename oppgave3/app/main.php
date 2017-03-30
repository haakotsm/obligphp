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
</head>
<div class="nav navbar navbar-inverse bg-inverse">
    <h3 class="navbar-brand">HiOA Cinema</h3>
</div>
<div class="container-fluid my-4">
    <div class="jumbotron col-6 offset-3">
        <h4>Kundeinformasjon</h4>
        <form class="form-inline" action="confirm.php" method="post">
            <div class="form-group col-6 p-1">
                <label for="navn" class="form-control-label mx-1">Navn</label>
                <input type="text" name="navn" id="navn" class="form-control col-12" required>
            </div>
            <div class="form-group col-6 p-1">
                <label for="telefonnummer" class="form-control-label mx-1">Telefonnummer</label>
                <input type="tel" name="telefonnummer" id="telefonnummer" class="form-control col-12" required>
            </div>
            <div class="form-group col-6 p-1">
                <label for="epost" class="form-control-label mx-1">Epost</label>
                <input type="email" name="epost" id="epost" class="form-control col-12" required>
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
                <select name="antall" id="antall" class="custom-select col-12">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
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