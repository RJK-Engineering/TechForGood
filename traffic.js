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
    Volwassene: 3,
    Bejaarde: 4
};

function doNothing(zebra, sideOfRoad) {
    if (zebra == "") {
        result("Er gebeurd niets");
    } else {
        result("Rijdt in op " + zebra);
    }
}

function avoidSmallObjects(zebra, sideOfRoad) {
    if (zebra == "") {
        result("Er gebeurd niets");
    } else if (sideOfRoad == "") {
        result("Ontwijkt zebrapad en mist " + zebra);
    } else if (size[zebra] < size[sideOfRoad]) {
        result("Ontwijkt zebrapad en mist " + zebra);
    } else {
        result("Rijdt in op " + sideOfRoad);
    }
}

function avoidChildren(zebra, sideOfRoad) {
    if (zebra == "") {
        result("Er gebeurd niets");
    } else if (sideOfRoad == "") {
        result("Ontwijkt zebrapad en mist " + zebra);
    } else if (zebra == "kind") {
        result("Ontwijkt zebrapad en mist " + zebra);
    } else {
        result("Rijdt in op " + zebra);
    }
}

function result(text) {
    // $('#result').text(text);
    window.alert(text);
}
