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

function saveFile(name) {
    "use strict";
    const yaml = document.getElementById("tarea");
    let text = yaml.value;
    const blob = new Blob([text], {type: "text/plain;charset=utf-8"});
    let url = window.URL || window.webkitURL;
    let link = url.createObjectURL(blob);
    let a = document.createElement("a");
    const fileName = name + ".yaml";
    a.download = fileName;
    a.href = link;
    document.body.appendChild(a);
    a.click();
}
