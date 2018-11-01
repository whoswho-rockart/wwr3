function ifContinent(value) {
// planetarynames.wr.usgs.gov/Abbreviations
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
