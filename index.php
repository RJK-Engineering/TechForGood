<?php include("includes/database.php");?>
<?php include("includes/functions.php");?>
<?php include("algoritme/algoritme.php");?>

<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
</head>
<body>
  <div class="container">
<?php
    if(isset($_POST['submit'])){
        $achternaam = htmlentities($_POST['achternaam']);
        $leeftijd = htmlentities($_POST['leeftijd']);
        $geslacht = htmlentities($_POST['geslacht']);
        $school = htmlentities($_POST['school']);
        $roots = htmlentities($_POST['roots']);
        $religion = htmlentities($_POST['religion']);

        $query = "INSERT INTO `input_form` (`id`, `achternaam`, `leeftijd`, `geslacht`, `school`, `afkomst`, `religie`)
                  VALUES (NULL, '$achternaam', '$leeftijd', '$geslacht', '$school', '$roots', '$religion')";
        $result= mysqli_query($connection, $query);
        ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col"><b>Your Result</b></th>
            </tr>
            <tr>
                <th scope="col">Achternaam</th>
                <th scope="col">Leeftijd</th>
                <th scope="col">Geslacht</th>
                <th scope="col">School</th>
                <th scope="col">Afkomst</th>
                <th scope="col">Religie</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $achternaam;?></td>
                <td><?php echo $leeftijd;?></td>
                <td><?php echo $geslacht;?></td>
                <td><?php echo $school;?></td>
                <td><?php echo $roots;?></td>
                <td><?php echo $religion;?></td>
            </tr>
            </tbody>
        </table>
        <form action="index.php">
            <input type="submit" class="btn-warning" value="Opniew">
        </form>
<?php
    }//end of if submit 1st form
else{
?>

    <div class="col-md-5">
      <h1 style="text-align: center;">Test jouw profiel!</h1>
        <div class="form-area">
            <form method="post">
                <br style="clear:both">
                <p style="margin-bottom: 25px; text-align: center;">Vul hier persoonsgegevens in om te zien of jij op gesprek kunt komen bij dit bedrijf.</p>
                <div class="form-group, achternaam">
                    <input type="text" class="form-control" id="achternaam" name="achternaam" placeholder="Achternaam" required>
                </div>
                <br>
                <div class="form-group, leeftijd">
                    <input type="number" class="form-control" id="leeftijd" name="leeftijd" placeholder="Leeftijd" required>
                </div>
                <br>
                <div class="form-group, gender">
                    <input type="radio" name="geslacht" value="man" checked>Man<br>
                    <input type="radio" name="geslacht" value="vrouw">Vrouw
                </div>
                <br>
                <div class="form-group, school">
                    <select name="school" class="form-control" required>
                        <option value="" selected disabled>Hoogst behaalde opleiding</option>
                        <option value="0">Veterstrikdiploma</option>
                        <option value="1">Basisschool</option>
                        <option value="2">VMBO</option>
                        <option value="3">HAVO</option>
                        <option value="4">VWO/Gymnasium</option>
                        <option value="5">MBO(Niveau 1 of 2)</option>
                        <option value="6">MBO(Niveau 3 of 4)</option>
                        <option value="7">HBO</option>
                        <option value="8">WO</option>
                    </select>
                </div>
                <br>
                <div class="form-group, afkomst">
                    <select name="roots" class="form-control" required>
                        <option value="" selected disabled>Afkomst</option>
                        <option value="0">Nederlands(Blank)</option>
                        <option value="1">Europeaan(Blank)</option>
                        <option value="2">Midden-Oosten(Getint)</option>
                        <option value="3">Noord-Afrika(Getint)</option>
                        <option value="4">Zuid-Amerika(Latino)</option>
                        <option value="5">Afrikaans(Donker)</option>
                        <option value="6">Antillen(Donker)</option>
                        <option value="7">Aziatisch(Mongoloïde)</option>
                    </select>
                </div>
                <br>
                <div class="form-group, religion">
                    <select name="religion" class="form-control" required>
                        <option value="" selected disabled>Uw Religie</option>
                        <option value="0">Niet Religieus</option>
                        <option value="1">Christelijk</option>
                        <option value="2">Moslim</option>
                        <option value="3">Jood</option>
                        <option value="4">Rastafari</option>
                        <option value="5">Boeddhisme</option>
                        <option value="6">Rock n Roll(90% baan garantie)</option>
                        <option value="7">FC Groningen(110%)</option>
                    </select>
                </div>
                <br />
                <input type="submit" name="submit" value="Bekijk de uitkomst" class="btn btn-primary pull-right">
            </form>
        </div>
    </div>

    <img src="images/AI.jpg" width="400px" style="margin: 100px 0 0 40px;">
</div>
<div style="text-align: center; padding-bottom:20px;">
  <p cl>Deze website is ontwikkeld door CodeGorilla tijdens de HackForGood 2018</p>
</div>
<?php
}// end of else submit
?>
</body>
