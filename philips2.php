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
                <th onclick="sortTable(2)" scope="col">Doelgroepregister</th>
                <th onclick="sortTable(3)" scope="col">Resultaten</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Jan</td>
                <td>jan@gmail.com</td>
                <td>Ja</td>
                <td style="color: green">Geaccepteerd</td>
            </tr>
            <tr>
                <td>Laura</td>
                <td>laura@gmail.com</td>
                <td>Ja</td>
                <td style="color: green">Geaccepteerd</td>
            </tr>
            <tr>
                <td>Sandra</td>
                <td>sandra@gmail.com</td>
                <td>Nee</td>
                <td style="color: red">Afgewezen</td>
            </tr>
            <tr>
                <td>Micheal</td>
                <td>micheal@ziggo.nl</td>
                <td>Nee</td>
                <td style="color: red">Afgewezen</td>
            </tr>
            <tr>
                <td>Elmo</td>
                <td>elmo@kpn.nl</td>
                <td>Ja</td>
                <td style="color: green">Geaccepteerd</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>