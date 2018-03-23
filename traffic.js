jQuery(function ($) {
    $(".go").click(function(event) {
        var form = document.forms['traffic'];
        var strategy = form.strategy.value;
        var zebra = form.objectOnZebra.value;

        var sideOfRoad = form.objectOnSideOfRoad.value;
        window[strategy](zebra, sideOfRoad);
        return false;
    });
});

var size = {
    Niets: 0,
    Hond: 1,
    Kind: 2,
    Bejaarde: 3,
    Volwassene: 4
};

function doNothing(zebra, sideOfRoad) {
    if (zebra == "") {
        result("Er gebeurd niets", zebra, sideOfRoad);
    } else {
        result("Rijdt in op " + zebra, zebra, sideOfRoad);
    }
}

function avoidSmallObjects(zebra, sideOfRoad) {
    if (zebra == "") {
        result("Er gebeurd niets", zebra, sideOfRoad);
    } else if (sideOfRoad == "") {
        result("Ontwijkt zebrapad en mist " + zebra, zebra, sideOfRoad);
    } else if (size[zebra] < size[sideOfRoad]) {
        result("Ontwijkt zebrapad en mist " + zebra, zebra, sideOfRoad);
    } else {
        result("Rijdt in op " + zebra, zebra, sideOfRoad);
    }
}

function avoidChildren(zebra, sideOfRoad) {
    if (zebra == "") {
        result("Er gebeurd niets", zebra, sideOfRoad);
    } else if (sideOfRoad == "") {
        result("Ontwijkt zebrapad en mist " + zebra, zebra, sideOfRoad);
    } else if (zebra == "kind") {
        result("Ontwijkt zebrapad en mist " + zebra, zebra, sideOfRoad);
    } else {
        result("Rijdt in op " + zebra, zebra, sideOfRoad);
    }
}

function result(result, zebra, sideOfRoad) {
    // window.alert(result);
    var form = document.forms['traffic'];
    var datum = '1-1-2018';
    console.log(
        '<tr>' +
            '<td scope="col">' + '</td>' +
            '<td scope="col">' + zebra + '</td>' +
            '<td scope="col">' + sideOfRoad + '</td>' +
            '<td scope="col">' + form.strategy.value + '</td>' +
            '<td scope="col">' + result + '</td>' +
            '<td scope="col">' + datum + '</td>' +
        '</tr>'
    );
}
