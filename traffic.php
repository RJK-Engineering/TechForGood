<!DOCTYPE html>
<html>
<head>
    <title>Traffic</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
</head>
<body>
<div class="container main">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Traffic Simulator</h3>
            </div>
            <table class="table table-hover">

                <form id="traffic" class="col-md-5">
                    <div class="col-md-5 pull-right">
                        <img src="images/kruispunt.jpg">
                    </div>
                    <div class="form-group">
                        <tr>
                            <label>Op zebrapad:</label>
                            <select name="objectOnZebra">
                                <option value="">Niets</option>
                                <option value="kind">Kind</option>
                                <option value="hond">Hond</option>
                                <option value="volwassene">Volwassene</option>
                                <option value="bejaarde">Bejaarde</option>
                            </select>
                        </tr>
                    </div>
                    <div class="form-group">
                        </tr>
                        <label>Naast de weg:</label>
                        <select name="objectOnSideOfRoad">
                            <option value="">Niets</option>
                            <option value="kind">Kind</option>
                            <option value="hond">Hond</option>
                            <option value="volwassene">Volwassene</option>
                            <option value="bejaarde">Bejaarde</option>
                        </select>
                        </tr>
                    </div>
                    <div class="form-group">
                        </tr>
                        <label>Strategy:</label><br>
                        <input type="radio" name="strategy" value="doNothing" checked> Do Nothing<br>
                        <input type="radio" name="strategy" value="avoidSmallObjects"> Avoid Small Objects<br>
                        <input type="radio" name="strategy" value="avoidChildren"> Avoid Children<br>
                        </tr>
                    </div>

                    <button class="go btn-info">Go</button>
                </form>
            </table>
            <!--    <div id="result"></div>-->
        </>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="traffic.js"></script>
</body>
</html>
