
function myFunction(all) {
    var x, i;
    x = document.getElementsByClassName("pathway");
    c = "";
    for (i = 0; i < x.length; i++) {
        Removeproject(x[i], "show");
        if (x[i].className.indexOf(c) > -1) Addproject(x[i], "show");
    }
}


filterSelection_pathway("all");
function filterSelection_pathway(c) {
    var x, i;
    x = document.getElementsByClassName("pathway");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        Removeproject(x[i], "show");
        if (x[i].className.indexOf(c) > -1) Addproject(x[i], "show");
    }
}

function Addproject(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

function Removeproject(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}