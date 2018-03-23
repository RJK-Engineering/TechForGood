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
        ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col"><b>Resultaat</b></th>
                <th scope="col">
                    <?php if($resultaat){
                        echo "<script type='text/javascript'>alert('Uitgenodigd!'</script>";

                    }else{
                        echo "Afgewezen";
                    }
                    ?>
                </th>
            </tr>
            </thead>
        </table>
        <form action="index.php">
            <input type="submit" class="btn-warning" value="Opniew">
        </form>
        <?php

        $query = "INSERT INTO `input_form` (`id`, `leeftijd`, `geslacht`, `school`,
                              `afkomst`, `religie`,`resultaat`, `datum`, `corrupted`)
                  VALUES (NULL, '$leeftijd', '$geslacht', '$school', '$roots',
                                '$religion','$resultaat', '$date', '$corrupted')";
        $result= mysqli_query($connection, $query);

    }//end of if submit 1st form
    else{
        ?>
        <div class="col-md-5">
            <div class="form-area">
                <form method="post">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Jouw profiel</h3>
                    <div class="form-group">
                        <input type="number" class="form-control" id="leeftijd" name="leeftijd" placeholder="Leeftijd" required>
                    </div>
                    <div class="form-group">
                        <input type="radio" name="geslacht" value="man" checked>Man<br>
                        <input type="radio" name="geslacht" value="vrouw">Vrouw
                    </div>
                    <div class="form-group">
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
                    <div class="form-group">
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
                    <div class="form-group">
                        <select name="religion" class="form-control" required>
                            <option value="" selected disabled>Uw Religie</option>
                            <option value="0">Niet Religieus</option>
                            <option value="1">Christelijk</option>
                            <option value="2">Moslim</option>
                            <option value="3">Jood</option>
                            <option value="4">Rastafari</option>
                            <option value="5">Boeddhisme</option>
                        </select>
                    </div>
                    <input type="submit" name="submit" value="Bekijk de uitkomst" class="btn btn-primary pull-right">
                </form>
            </div>
        </div>
        <img src="images/maija2.png" width="25%" height="">
        <img src="images/AI.jpg" width="25%" style="margin: 100px 0 0 40px;">
        <?php
    }// end of else submit
    ?>
</div>
<!--<a href="philips%20website/techforgood/www.ethisch-hacker.nl/index.html">Philips link</a>-->

</body>
