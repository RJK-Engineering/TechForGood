<?php include ("includes/database.php");?>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="stylesheets/style-showall.css" rel="stylesheet">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="includes/js/showall-table.js"></script>
    </head>
<body>
<?php
$sql = "SELECT id, leeftijd, geslacht, school, afkomst, religie, resultaat, datum FROM input_form GROUP BY datum DESC";
$result = $connection->query($sql);
?>
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
                <th onclick="sortTable(1)" scope="col">Leeftijd</th>
                <th onclick="sortTable(2)" scope="col">Geslacht</th>
                <th onclick="sortTable(3)" scope="col">School</th>
                <th onclick="sortTable(4)" scope="col">Afkomst</th>
                <th onclick="sortTable(5)" scope="col">Religie</th>
                <th onclick="sortTable(6)" scope="col">Resultaat</th>
                <th onclick="sortTable(7)" scope="col">Datum</th>
            </tr>
            </thead>
            <tbody>

            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td scope='col'> ". $row["id"]. "</td><td scope='col'>". $row["leeftijd"]. "</td><td scope='col'>" . $row["geslacht"] . " </td><td scope='col'>" . $row["school"] . " </td><td scope='col'>" . $row["afkomst"] . "</td><td scope='col'>" . $row["religie"] . "</td><td scope='col'>" ;
                    if($row["resultaat"]){
                        echo '<span style="color: green">Uitgenodigd</span>' ;
                    }else{echo '<span style="color: red">Afgewezen</span>';
                    }
                    echo "</td><td scope='col'>" . $row["datum"]. "</td></tr>";
                }//end of while loop

            } //end of if $result>num_rows
            else {
                echo "0 results";
            }//end of else $result>num_rows
            ?>
            </tbody>
        </table>
    </div>


<!--<table class="table">-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th scope="col"><b>Alle resultaten</b></th>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <th scope="col">ID</th>-->
<!--        <th scope="col">Achternaam</th>-->
<!--        <th scope="col">Leeftijd</th>-->
<!--        <th scope="col">Geslacht</th>-->
<!--        <th scope="col">School</th>-->
<!--        <th scope="col">Afkomst</th>-->
<!--        <th scope="col">Religie</th>-->
<!--        <th scope="col">Resultaat</th>-->
<!--        <th scope="col">Datum</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!---->
<?php
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "<tr><th scope='col'> ". $row["id"]. "</th><th scope='col'>". $row["achternaam"]. "</th><th scope='col'>". $row["leeftijd"]. "</th><th scope='col'>" . $row["geslacht"] . " </th><th scope='col'>" . $row["school"] . " </th><th scope='col'>" . $row["afkomst"] . "</th><th scope='col'>" . $row["religie"] . "</th><th scope='col'>" . $row["resultaat"] . "</th><th scope='col'>" . $row["datum"]. "</th></tr>";
//    }
//
//} //end of if $result>num_rows
// else {
//    echo "0 results";
//}//end of else $result>num_rows
//?>
<!--    </tbody>-->
<!--</table>-->

<?php
$connection->close();
?>
    <a href="home.php">Ga terug</a>
</div>
</body>

