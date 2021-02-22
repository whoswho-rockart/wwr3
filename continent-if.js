/* JSLint edition 2020-11-06 (jslint.com)
 * Assume…
 *   in development
 *   a browser
 * No errors reported
 * ——
 * planetarynames.wr.usgs.gov/Abbreviations
 */

function ifContinent(value) {
    "use strict";
    if (value === "AF") {
        return "Africa";
    } else if (value === "AS") {
        return "Asia";
    } else if (value === "EU") {
        return "Europe";
    } else if (value === "NA") {
        return "North America";
    } else if (value === "SA") {
        return "South America";
    } else if (value === "OC") {
        return "Oceania";
    } else {
        return value;
    }
}
