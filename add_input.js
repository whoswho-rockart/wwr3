/* JSLint edition 2020-11-06 (jslint.com)
 * Assume…
 *   in development
 *   a browser
 * No errors reported
 */

let counter = 1;
let innerHt = "<br><input type=\"text\" name=\"myInputs[]\">";

function addInput(divName) {
    "use strict";
    let newdiv = document.createElement("div");
    newdiv.innerHTML = "Entry " + (counter + 1) + innerHt;
    document.getElementById(divName).appendChild(newdiv);
    counter += counter;
}
