/*
 * validated with JSLint edition 2019-09-17 (http://jslint.com/)
 * options: assume a browser; tolerate whitespace mess;
 * imported global variables…
 * wwr continent country_ISO_3166_1_alpha_2 language_ISO_3166_1
 * no errors reported
 */

/*
/home/t510f/Documents/tec/git/devel/WhosWho-Rockart/wwr3/docs/en/search.html
/home/t510f/Documents/tec/js/dist/JSLint-master/index.html
var wwr;
var language_ISO_3166_1;
var continent;
var country_ISO_3166_1_alpha_2;
 */

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


function clearNodes(element) {
    "use strict";
    var a = document.getElementById(element);
    while (a.childNodes[1]) {
        a.removeChild(a.childNodes[1]);
    }
}


function ifIndex(index, array, str1, str2) {
    "use strict";
    if (index === array.length - 1) {
        return str1;
    } else if (index === array.length - 2) {
        return str2;
    } else {
        return ", ";
    }
}


function processForm(form, card) {
    "use strict";
    var forenames = form.forenames.value.trim().toLowerCase();
    var surname = form.surname.value.trim().toLowerCase();
    var interests = form.interests.value;
    var interest = form.interest.value.trim().toLowerCase();
    var continents = form.continents.value;
    var periods = form.periods.value;
    var rarea = form.rarea.value.trim().toLowerCase();
    var rprovince = form.rprovince.value.trim().toLowerCase();
    var rcountry = form.rcountry.value.trim().toUpperCase();
    var atown = form.atown.value.trim().toLowerCase();
    var aprovince = form.aprovince.value.trim().toLowerCase();
    var acountry = form.acountry.value.trim().toUpperCase();
    var result = wwr.filter(function (value) {

        // other research interest
        var vInterest = value[7].reduce(function (accumulator, value) {
            return accumulator + value + " ";
        }, "");

        // research area
        var vRarea = value[11].reduce(function (accumulator, value) {
            return accumulator + value[0] + " ";
        }, "");

        // research province, state, …
        var vRprovince = value[11].reduce(function (accumulator, value) {
            return accumulator + value[1] + " ";
        }, "");

        // research country
        var vRcountry = value[11].reduce(function (accumulator, value) {
            return accumulator + value[2] + " ";
        }, "");

        return value[0].toLowerCase().indexOf(forenames) !== -1
            && value[1].toLowerCase().indexOf(surname) !== -1
            && value[7].indexOf(interests) !== -1
            && vInterest.indexOf(interest) !== -1
            && value[8].indexOf(continents) !== -1
            && value[10].indexOf(periods) !== -1
            && vRarea.toLowerCase().indexOf(rarea) !== -1
            && vRprovince.toLowerCase().indexOf(rprovince) !== -1
            && vRcountry.indexOf(rcountry) !== -1
            && value[12][1].toLowerCase().indexOf(atown) !== -1
            && value[12][3].toLowerCase().indexOf(aprovince) !== -1
            && value[12][4].indexOf(acountry) !== -1;
    });

    // generate wwr entries
    result.map(function (value) {
        var a = document.getElementById("results");
        var b = document.createElement("div");
        var c = document.createElement("div");
        var d = document.createElement("p");
        var e;
        var f;

        b.setAttribute("class", "card mb-4 shadow-sm");
        c.setAttribute("class", "card-body");
        d.setAttribute("class", "card-text text-secondary");

        // surname
        d.appendChild(document.createTextNode(value[1] + ", "));

        // forenames
        d.appendChild(document.createTextNode(value[0] + ". "));

        // born
        d.appendChild(document.createTextNode("Born in "));
        d.appendChild(document.createTextNode(value[2] + ". "));

        // affiliations
        if (value[3].length > 0) {
            d.appendChild(document.createTextNode("Affiliations: "));
        }
        value[3].map(function (value, index, array) {
            f = value.reduce(function (accumulator, value1, index1, array1) {
                if (index === array.length - 1) {
                    e = ifIndex(index1, array1, ". ", " to ");
                } else {
                    e = ifIndex(index1, array1, "; ", " to ");
                }
                return accumulator + value1 + e;
            }, "");
            d.appendChild(document.createTextNode(f));
        });

        // awards
        if (value[4].length > 0) {
            d.appendChild(document.createTextNode("Awards: "));
        }
        value[4].map(function (value, index, array) {
            f = value.reduce(function (accumulator, value1, index1, array1) {
                if (index === array.length - 1) {
                    e = ifIndex(index1, array1, ". ", ", ");
                } else {
                    e = ifIndex(index1, array1, "; ", ", ");
                }
                return accumulator + value1 + e;
            }, "");
            d.appendChild(document.createTextNode(f));
        });

        // education
        if (value[5].length > 0) {
            d.appendChild(document.createTextNode("Education: "));
        }
        value[5].map(function (value, index, array) {
            f = value.reduce(function (accumulator, value1, index1, array1) {
                if (index === array.length - 1) {
                    e = ifIndex(index1, array1, ". ", ", ");
                } else {
                    e = ifIndex(index1, array1, "; ", ", ");
                }
                return accumulator + value1 + e;
            }, "");
            d.appendChild(document.createTextNode(f));
        });

        // languages
        if (value[6].length > 0) {
            d.appendChild(document.createTextNode("Languages: "));
        }
        e = value[6].map(function (value) {
            return language_ISO_3166_1[value];
        });
        f = e.reduce(function (accumulator, value, index, array) {
            return accumulator + value + ifIndex(index, array, ". ", ", ");
        }, "");
        d.appendChild(document.createTextNode(f));

        // research interests
        if (value[7].length > 0) {
            d.appendChild(document.createTextNode("Research interests: "));
        }
        f = value[7].reduce(function (accumulator, value, index, array) {
            return accumulator + value + ifIndex(index, array, ". ", "");
        }, "");
        d.appendChild(document.createTextNode(f));

        // research continents
        if (value[8].length > 0) {
            d.appendChild(document.createTextNode("Research continents: "));
        }
        e = value[8].map(function (value) {
            return continent[value];
        });
        f = e.reduce(function (accumulator, value, index, array) {
            return accumulator + value + ifIndex(index, array, ". ", "");
        }, "");
        d.appendChild(document.createTextNode(f));

        // research interval
        if (value[9].length > 0) {
            d.appendChild(document.createTextNode("Research interval: from "));
        }
        f = value[9].reduce(function (accumulator, value, index, array) {
            return accumulator + value + ifIndex(index, array, ". ", " to ");
        }, "");
        d.appendChild(document.createTextNode(f));

        // research periods
        if (value[10].length > 0) {
            d.appendChild(document.createTextNode("Research periods: "));
        }
        f = value[10].reduce(function (accumulator, value, index, array) {
            return accumulator + value + ifIndex(index, array, ". ", "");
        }, "");
        d.appendChild(document.createTextNode(f));

        // research projects
        if (value[11].length > 0) {
            d.appendChild(document.createTextNode("Research projects: "));
        }
        value[11].map(function (value, index, array) {
            f = value.reduce(function (accumulator, value1, index1, array1) {
                if (index1 === 2) {
                    value1 = country_ISO_3166_1_alpha_2[value1];
                } else if (index === array.length - 1) {
                    e = ifIndex(index1, array1, ". ", " to ");
                } else {
                    e = ifIndex(index1, array1, "; ", " to ");
                }
                return accumulator + value1 + e;
            }, "");
            d.appendChild(document.createTextNode(f));
        });

        // address
        if (value[12].length > 0) {
            d.appendChild(document.createTextNode("Address: "));
        }
        f = value[12].reduce(function (accumulator, value, index, array) {
            if (index === 0) {
                e = value.reduce(function (acc, val) {
                    return acc + val + ", ";
                }, "");
                return accumulator + e;
            } else if (index === 4) {
                e = country_ISO_3166_1_alpha_2[value];
                return accumulator + e + ", ";
            } else {
                return accumulator + value + ifIndex(index, array, ". ", ", ");
            }
        }, "");
        d.appendChild(document.createTextNode(f));

        // phone, mobile, fax
        if (value[13].length > 0) {
            d.appendChild(document.createTextNode("Telephony: "));
        }
        value[13].map(function (value, index, array) {
            f = value.reduce(function (accumulator, value1, index1, array1) {
                if (index === array.length - 1) {
                    e = ifIndex(index1, array1, ". ", ", ");
                } else {
                    e = ifIndex(index1, array1, "; ", ", ");
                }
                return accumulator + value1 + e;
            }, "");
            d.appendChild(document.createTextNode(f));
        });

        // email
        if (value[14].length > 0) {
            d.appendChild(document.createTextNode("Email: "));
        }
        f = value[14].reduce(function (accumulator, value, index, array) {
            return accumulator + value + ifIndex(index, array, ". ", "");
        }, "");
        d.appendChild(document.createTextNode(f));

        // messenger
        if (value[15].length > 0) {
            d.appendChild(document.createTextNode("Messenger: "));
        }
        value[15].map(function (value, index, array) {
            f = value.reduce(function (accumulator, value1, index1, array1) {
                if (index === array.length - 1) {
                    e = ifIndex(index1, array1, ". ", ", ");
                } else {
                    e = ifIndex(index1, array1, "; ", ", ");
                }
                return accumulator + value1 + e;
            }, "");
            d.appendChild(document.createTextNode(f));
        });

        // web pages
        if (value[16].length > 0) {
            d.appendChild(document.createTextNode("Web pages: "));
        }
        f = value[16].reduce(function (accumulator, value, index, array) {
            return accumulator + value + ifIndex(index, array, ".", ", ");
        }, "");
        d.appendChild(document.createTextNode(f));

        if (card === 1) {
            c.appendChild(d);
            b.appendChild(c);
            a.appendChild(b);
        } else {
            a.appendChild(d);
        }
    });
}
