/* JSLint edition 2020-11-06 (jslint.com)
 * Assume…
 *   in development
 *   a browser
 * Global variables…
 *   Blob
 * No errors reported
 * ——
 * saveFile tested as follows:
 *   Firefox (version 85.0.2)
 */

function saveAsFile(name) {
    "use strict";
    const text = document.getElementById("tarea").value;
    const blob = new Blob([text], {type: "text/plain;charset=utf-8"});
    let url = window.URL || window.webkitURL;
    let a = document.createElement("a");
    a.href = url.createObjectURL(blob);
    a.download = name;
    document.body.appendChild(a);
    a.click();
}

function copyElem() {
    "use strict";
    const elem = document.getElementById("tarea");
    elem.select();
    elem.setSelectionRange(0, 99999); // phone or tablet
    document.execCommand("copy");
}
