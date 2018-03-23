<?php include ("includes/database.php");?>
<html>
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="stylesheets/style-showall.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="includes/js/showall-table.js"></script>
</head>
<body>

<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Alle resultaten</h3>
            <div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
            </div>
        </div>
        <div class="panel-body">
            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Results" />
        </div>
        <table class="table table-hover" id="dev-table">
            <thead>
            <tr>
                <th onclick="sortTable(0)" scope="col">Naam</th>
                <th onclick="sortTable(1)" scope="col">E-mail</th>
                <th onclick="sortTable(2)" scope="col">Adres</th>
                <th onclick="sortTable(3)" scope="col">Woonplaats</th>
                <th onclick="sortTable(4)" scope="col">Tel-nr</th>
                <th onclick="sortTable(5)" scope="col">Contactpersoon</th>
                <th onclick="sortTable(6)" scope="col">Hoogst genoten opleiding</th>
                <th onclick="sortTable(7)" scope="col">Voltooid</th>
                <th onclick="sortTable(8)" scope="col">Uitkering</th>
                <th onclick="sortTable(9)" scope="col">Ervaring in ICT</th>
                <th onclick="sortTable(10)" scope="col">Resultaten</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Jan</td>
                <td>jan@gmail.com</td>
                <td>Herestraat 12</td>
                <td>Groningen</td>
                <td>0645673451</td>
                <td>Klaas van Velsen</td>
                <td>WO</td>
                <td>Ja</td>
                <td>Nee</td>
                <td>3 Jaar</td>
                <td style="color: red">Afgewezen</td>
            </tr>
            <tr>
                <td>Laura</td>
                <td>laura@gmail.com</td>
                <td>Mondriaanstraat 12</td>
                <td>Assen</td>
                <td>0612358543</td>
                <td>Sander Visser</td>
                <td>MBO-Niv.4</td>
                <td>Ja</td>
                <td>Ja</td>
                <td>Nee</td>
                <td style="color: red">Afgewezen</td>
            </tr>
            <tr>
                <td>Sandra</td>
                <td>sandra@gmail.com</td>
                <td>Kraneweg 28b</td>
                <td>Zwolle</td>
                <td>0614334652</td>
                <td>Roelof Jansen</td>
                <td>HAVO</td>
                <td>Ja</td>
                <td>Nee</td>
                <td>Ja</td>
                <td style="color: red">Afgewezen</td>
            </tr>
            <tr>
                <td>Micheal</td>
                <td>micheal@ziggo.nl</td>
                <td>Vismarkt 231</td>
                <td>Sittard</td>
                <td>0695885441</td>
                <td>Roy Steenstra</td>
                <td>VWO</td>
                <td>Nee</td>
                <td>Ja</td>
                <td>Nee</td>
                <td style="color: red">Afgewezen</td>
            </tr>
            <tr>
                <td>Elmo</td>
                <td>elmo@kpn.nl</td>
                <td>Steenstraat 12</td>
                <td>Groningen</td>
                <td>0633255890</td>
                <td>Nathelie De Jong</td>
                <td>HBO</td>
                <td>Ja</td>
                <td>Nee</td>
                <td>Nee</td>
                <td style="color: red">Afgewezen</td>
            </tr>
            </tbody>
            </table>
    </div>
</div>
</body>
</html>