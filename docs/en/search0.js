/*
 * validated with JSLint edition 2018-10-06 (http://jslint.com/)
 * no errors reported (JSLint options: Assume… a browser)
 */

function clearbox(parent) {
    "use strict";
    var a = document.getElementById(parent);
    //a.appendChild(document.createTextNode(""));
    //a.innerHTML = "";
    while (a.childNodes[2]) {
        a.removeChild(a.childNodes[2]);
    }
}

function test1(form) {
    "use strict";
    var i = 0;
    var interests = form.interests.value;
    var result = wwr3.filter(function (value, index, array) {
        return wwr3[index][7].indexOf(interests) !== -1;
    });

    result.map(function (value1, index1, array1) {
        var a = document.getElementById("results");
        var b = document.createElement("div");
        var c = document.createElement("div");
        var d = document.createElement("p");
        var e;
        var f;
        b.setAttribute("class", "card mb-4 shadow-sm");
        c.setAttribute("class", "card-body");
        d.setAttribute("class", "card-text text-secondary");
        d.appendChild(document.createTextNode(result[index1][1] + ", "));
        d.appendChild(document.createTextNode(result[index1][0] + ". "));
        d.appendChild(document.createTextNode(result[index1][2] + ". "));
        d.appendChild(document.createTextNode("Interests: "));
        result[index1][7].map(function (value2, index2, array2) {
            if (index2 === result[index1][7].length - 1) {
                f = ".";
            } else {
                f = (", ");
            }
            e = result[index1][7][index2].toLowerCase() + f;
            d.appendChild(document.createTextNode(e));
        });
        //while (i < result[index1][7].length) {
            //if (i === result[index1][7].length - 1) {
                //f = ".";
            //} else {
                //f = (", ");
            //}
            //e = result[index1][7][i].toLowerCase() + f;
            //d.appendChild(document.createTextNode(e));
            //i += 1;
        //}
        c.appendChild(d);
        b.appendChild(c);
        a.appendChild(b);
    });
}

function h2(parent, text) {
    "use strict";
    var a = document.getElementById(parent);
    var b = document.createElement("h2");
    var c = document.createElement("small");
    b.setAttribute("class", "card-text text-secondary");
    c.appendChild(document.createTextNode(text));
    b.appendChild(c);
    a.appendChild(b);
}

function process(form) {
    "use strict";
    var interests = form.interests.value;
    var a = document.getElementById("results");
    var b;
    var c;
    var d;
    var i = 0;
    var j = 0;
    a.appendChild(document.createTextNode(""));
    a.innerHTML = "";
    while (i < wwr3.length) {
        b = document.createElement("p");
        b.setAttribute("class", "card-text text-secondary");
        b.setAttribute("id", "wwr" + i);
        //if (wwr3[i][7].indexOf(interests) == -1) {
            //b = document.getElementById("wwr" + i);
            //b.remove();
        //}
        if (wwr3[i][7].indexOf(interests) !== -1) {
            b.appendChild(document.createTextNode(wwr3[i][1] + ", "));
            b.appendChild(document.createTextNode(wwr3[i][0] + ". "));
            b.appendChild(document.createTextNode(wwr3[i][2] + ". "));
            b.appendChild(document.createTextNode("Interests: "));
            j = 0;
            while (j < wwr3[i][7].length) {
                if (j === wwr3[i][7].length - 1) {
                    c = ".";
                } else {
                    c = (", ");
                }
                d = wwr3[i][7][j].toLowerCase() + c;
                b.appendChild(document.createTextNode(d));
                j += 1;
            }
        }
        a.appendChild(b);
        i += 1;
    }
}
