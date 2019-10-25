var counter = 1;
var innerHt = "<br><input type=\"text\" name=\"myInputs[]\">";
function addInput(divName) {
    "use strict";
    var newdiv = document.createElement("div");
    newdiv.innerHTML = "Entry " + (counter + 1) + innerHt;
    document.getElementById(divName).appendChild(newdiv);
    counter += counter;
}
