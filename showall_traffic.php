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
                    <th onclick="sortTable(0)" scope="col">ID</th>
                    <th onclick="sortTable(1)" scope="col">Op zebrapad</th>
                    <th onclick="sortTable(2)" scope="col">Naast de weg</th>
                    <th onclick="sortTable(3)" scope="col">Algoritme</th>
                    <th onclick="sortTable(3)" scope="col">Resultaat</th>
                    <th onclick="sortTable(4)" scope="col">Datum</th>
                </tr>
            </thead>

            <tbody>
                <tr><td scope="col">1</td><td scope="col">hond</td><td scope="col">volwassene</td><td scope="col">avoidSmallObjects</td><td scope="col">Rijdt in op hond</td><td scope="col">1-1-2018</td></tr>
                <tr><td scope="col">2</td><td scope="col">hond</td><td scope="col">volwassene</td><td scope="col">avoidChildren</td><td scope="col">Rijdt in op hond</td><td scope="col">1-1-2018</td></tr>
                <tr><td scope="col">3</td><td scope="col">kind</td><td scope="col">volwassene</td><td scope="col">avoidChildren</td><td scope="col">Ontwijkt zebrapad en mist kind</td><td scope="col">1-1-2018</td></tr>
                <tr><td scope="col">4</td><td scope="col">kind</td><td scope="col">volwassene</td><td scope="col">avoidSmallObjects</td><td scope="col">Rijdt in op kind</td><td scope="col">1-1-2018</td></tr>
                <tr><td scope="col">5</td><td scope="col">kind</td><td scope="col">hond</td><td scope="col">avoidSmallObjects</td><td scope="col">Rijdt in op kind</td><td scope="col">1-1-2018</td></tr>
            </tbody>
        </table>
    </div>
</div>

<a href="home_traffic.php">Ga terug</a>

</body>
</html>
