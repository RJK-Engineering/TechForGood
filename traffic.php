<!DOCTYPE html>
<html>
<head>
    <title>Verkeer</title>
</head>
<body>
    <form id="traffic">
        <div class="form-group">
            <label>Op zebrapad:</label>
            <select name="objectOnZebra">
                <option value="">Niets</option>
                <option value="kind">Kind</option>
                <option value="hond">Hond</option>
                <option value="volwassene">Volwassene</option>
                <option value="bejaarde">Bejaarde</option>
            </select>
        </div>
        <div class="form-group">
            <label>Naast de weg:</label>
            <select name="objectOnSideOfRoad">
                <option value="">Niets</option>
                <option value="kind">Kind</option>
                <option value="hond">Hond</option>
                <option value="volwassene">Volwassene</option>
                <option value="bejaarde">Bejaarde</option>
            </select>
        </div>
        <div class="form-group">
            <label>Zelfrijdende Auto algoritme:</label><br>
            <input type="radio" name="strategy" value="doNothing" checked> Niets doen<br>
            <input type="radio" name="strategy" value="avoidSmallObjects"> Vermijd kleine objecten<br>
            <input type="radio" name="strategy" value="avoidChildren"> Vermijd kinderen<br>
        </div>
        <button class="go">Ga</button>
    </form>
    <div id="result"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="traffic.js"></script>
</body>
</html>
