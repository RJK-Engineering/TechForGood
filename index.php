<?php include("includes/database.php");?>
<?php include("includes/functions.php");?>
<?php include("algoritme/algoritme.php");?>

<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<?php
    if(isset($_POST['submit'])){
        $achternaam = htmlentities($_POST['achternaam']);
        $leeftijd = htmlentities($_POST['leeftijd']);
        $geslacht = htmlentities($_POST['geslacht']);
        $school = htmlentities($_POST['school']);
        $roots = htmlentities($_POST['roots']);
        $religion = htmlentities($_POST['religion']);
        date_default_timezone_set("Europe/Amsterdam");
        $date = date("Y-m-d H:i:s");
        $corrupted = 0;

        $Marie = new Input_form($leeftijd, $geslacht, $school, $roots, $religion);
        $resultaat = $Marie->isaccepted();
        $query = "INSERT INTO `input_form` (`id`, `achternaam`, `leeftijd`, `geslacht`, `school`,
                              `afkomst`, `religie`,`resultaat`, `datum`, `corrupted`)
                  VALUES (NULL, '$achternaam', '$leeftijd', '$geslacht', '$school', '$roots',
                                '$religion','$resultaat', '$date', '$corrupted')";
        $result= mysqli_query($connection, $query);

//        $Marie->isaccepted();
        ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col"><b>Your Result</b></th>
                <th scope="col"><?php $Marie->isaccepted();?></th>
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
<div class="container">
    <div class="col-md-5">
        <div class="form-area">
            <form method="post">
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Jouw profiel</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="achternaam" name="achternaam" placeholder="Achternaam">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="leeftijd" name="leeftijd" placeholder="Leeftijd">
                </div>
                <div class="form-group">
                    <input type="radio" name="geslacht" value="man" checked>Man<br>
                    <input type="radio" name="geslacht" value="vrouw">Vrouw
                </div>
                <div class="form-group">
                    <select name="school" class="form-control">
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
                <div class="form-group">
                    <select name="roots" class="form-control">
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
                <div class="form-group">
                    <select name="religion" class="form-control">
                        <option value="" selected disabled>Uw Religie</option>
                        <option value="0">Niet Religieus</option>
                        <option value="1">Christelijk</option>
                        <option value="2">Moslim</option>
                        <option value="3">Jood</option>
                        <option value="4">Rastafari</option>
                        <option value="5">Boeddhisme</option>
                    </select>
                </div>
                <input type="submit" name="submit" value="Sumbit" class="btn btn-primary pull-right">
            </form>
        </div>
    </div>
</div>
<?php
}// end of else submit
?>
</body>
