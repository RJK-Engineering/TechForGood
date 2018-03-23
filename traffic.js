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
        result("Nothing happens");
    } else {
        result("Crash into " + zebra);
    }
}

function avoidSmallObjects(zebra, sideOfRoad) {
    if (zebra == "") {
        result("Nothing happens");
    } else if (sideOfRoad == "") {
        result("Swerving onto side of the road missing " + zebra);
    } else if (size[zebra] < size[sideOfRoad]) {
        result("Swerving onto side of the road missing " + zebra);
    } else {
        result("Crash into " + sideOfRoad);
    }
}

function avoidChildren(zebra, sideOfRoad) {
    if (zebra == "") {
        result("Nothing happens");
    } else if (sideOfRoad == "") {
        result("Swerving onto side of the road missing " + zebra);
    } else if (zebra == "kind") {
        result("Swerving onto side of the road missing " + zebra);
    } else {
        result("Crash into " + zebra);
    }
}

function result(text) {
    $('#result').text(text);
}
