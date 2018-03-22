<?php include ("includes/database.php");?>

<?php
$sql = "SELECT id, achternaam, leeftijd, geslacht, school, afkomst, religie, resultaat, datum FROM input_form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Naam: ". $row["achternaam"]. " sekse: " . $row["geslacht"] . " Opleiding: ". $["school"] . " Afkomst: " . $row["afkomst"] . "Religie: " . $row["religie"] . "Resultaat:" . $row["resultaat"] . "Datum invoer:" . $row["datum"] "<br>";
    }

} else {
    echo "0 results";
}

$conn->close();


?>