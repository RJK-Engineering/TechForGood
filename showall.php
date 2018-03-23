<?php include ("includes/database.php");?>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
<body>
<div class="container">


<?php
$sql = "SELECT id, achternaam, leeftijd, geslacht, school, afkomst, religie, resultaat, datum FROM input_form";
$result = $connection->query($sql);
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col"><b>Alle resultaten</b></th>
    </tr>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Achternaam</th>
        <th scope="col">Leeftijd</th>
        <th scope="col">Geslacht</th>
        <th scope="col">School</th>
        <th scope="col">Afkomst</th>
        <th scope="col">Religie</th>
        <th scope="col">Resultaat</th>
        <th scope="col">Datum</th>
    </tr>
    </thead>
    <tbody>

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><th scope='col'> ". $row["id"]. "</th><th scope='col'>". $row["achternaam"]. "</th><th scope='col'>". $row["leeftijd"]. "</th><th scope='col'>" . $row["geslacht"] . " </th><th scope='col'>" . $row["school"] . " </th><th scope='col'>" . $row["afkomst"] . "</th><th scope='col'>" . $row["religie"] . "</th><th scope='col'>" . $row["resultaat"] . "</th><th scope='col'>" . $row["datum"]. "</th></tr>";
    }

} //end of if $result>num_rows
 else {
    echo "0 results";
}//end of else $result>num_rows
?>
    </tbody>
</table>

<?php
$connection->close();
?>
    <a href="index.php">Ga terug</a>
</div>
</body>

