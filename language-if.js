/* JSLint edition 2020-11-06 (jslint.com)
 * Assume…
 *   in development
 *   a browser
 * No errors reported
 * ——
 * ifLanguage(value) tested as follows:
 *   Firefox (version 85.0.2)
 * ——
 * en.wikipedia.org/wiki/List_of_ISO_639-1_codes
 */

function ifLanguage(value) {
    "use strict";
    if (value === "ab") {
        return "Abkhazian";
    } else if (value === "aa") {
        return "Afar";
    } else if (value === "af") {
        return "Afrikaans";
    } else if (value === "ak") {
        return "Akan";
    } else if (value === "sq") {
        return "Albanian";
    } else if (value === "am") {
        return "Amharic";
    } else if (value === "ar") {
        return "Arabic";
    } else if (value === "an") {
        return "Aragonese";
    } else if (value === "hy") {
        return "Armenian";
    } else if (value === "as") {
        return "Assamese";
    } else if (value === "av") {
        return "Avaric";
    } else if (value === "ay") {
        return "Aymara";
    } else if (value === "az") {
        return "Azerbaijani";
    } else if (value === "bm") {
        return "Bambara";
    } else if (value === "ba") {
        return "Bashkir";
    } else if (value === "eu") {
        return "Basque";
    } else if (value === "be") {
        return "Belarusian";
    } else if (value === "bn") {
        return "Bengali";
    } else if (value === "bh") {
        return "Bihari";
    } else if (value === "bi") {
        return "Bislama";
    } else if (value === "bs") {
        return "Bosnian";
    } else if (value === "br") {
        return "Breton";
    } else if (value === "bg") {
        return "Bulgarian";
    } else if (value === "my") {
        return "Burmese";
    } else if (value === "ca") {
        return "Catalan,";
    } else if (value === "ch") {
        return "Chamorro";
    } else if (value === "ce") {
        return "Chechen";
    } else if (value === "ny") {
        return "Chichewa";
    } else if (value === "zh") {
        return "Chinese";
    } else if (value === "cv") {
        return "Chuvash";
    } else if (value === "kw") {
        return "Cornish";
    } else if (value === "co") {
        return "Corsican";
    } else if (value === "cr") {
        return "Cree";
    } else if (value === "hr") {
        return "Croatian";
    } else if (value === "cs") {
        return "Czech";
    } else if (value === "da") {
        return "Danish";
    } else if (value === "dv") {
        return "Divehi";
    } else if (value === "nl") {
        return "Dutch";
    } else if (value === "dz") {
        return "Dzongkha";
    } else if (value === "en") {
        return "English";
    } else if (value === "eo") {
        return "Esperanto";
    } else if (value === "et") {
        return "Estonian";
    } else if (value === "ee") {
        return "Ewe";
    } else if (value === "fo") {
        return "Faroese";
    } else if (value === "fj") {
        return "Fijian";
    } else if (value === "fi") {
        return "Finnish";
    } else if (value === "fr") {
        return "French";
    } else if (value === "ff") {
        return "Fulah";
    } else if (value === "gl") {
        return "Galician";
    } else if (value === "ka") {
        return "Georgian";
    } else if (value === "de") {
        return "German";
    } else if (value === "el") {
        return "Greek";
    } else if (value === "gn") {
        return "Guaraní";
    } else if (value === "gu") {
        return "Gujarati";
    } else if (value === "ht") {
        return "Haitian";
    } else if (value === "ha") {
        return "Hausa";
    } else if (value === "he") {
        return "Hebrew";
    } else if (value === "hz") {
        return "Herero";
    } else if (value === "hi") {
        return "Hindi";
    } else if (value === "ho") {
        return "Hiri Motu";
    } else if (value === "hu") {
        return "Hungarian";
    } else if (value === "ia") {
        return "Interlingua";
    } else if (value === "id") {
        return "Indonesian";
    } else if (value === "ie") {
        return "Interlingue";
    } else if (value === "ga") {
        return "Irish";
    } else if (value === "ig") {
        return "Igbo";
    } else if (value === "ik") {
        return "Inupiaq";
    } else if (value === "io") {
        return "Ido";
    } else if (value === "is") {
        return "Icelandic";
    } else if (value === "it") {
        return "Italian";
    } else if (value === "iu") {
        return "Inuktitut";
    } else if (value === "ja") {
        return "Japanese";
    } else if (value === "jv") {
        return "Javanese";
    } else if (value === "kl") {
        return "Kalaallisut";
    } else if (value === "kn") {
        return "Kannada";
    } else if (value === "kr") {
        return "Kanuri";
    } else if (value === "ks") {
        return "Kashmiri";
    } else if (value === "kk") {
        return "Kazakh";
    } else if (value === "km") {
        return "Central Khmer";
    } else if (value === "ki") {
        return "Kikuyu";
    } else if (value === "rw") {
        return "Kinyarwanda";
    } else if (value === "ky") {
        return "Kirghiz";
    } else if (value === "kv") {
        return "Komi";
    } else if (value === "kg") {
        return "Kongo";
    } else if (value === "ko") {
        return "Korean";
    } else if (value === "ku") {
        return "Kurdish";
    } else if (value === "kj") {
        return "Kuanyama";
    } else if (value === "la") {
        return "Latin";
    } else if (value === "lb") {
        return "Luxembourgish";
    } else if (value === "lg") {
        return "Ganda";
    } else if (value === "li") {
        return "Limburgan";
    } else if (value === "ln") {
        return "Lingala";
    } else if (value === "lo") {
        return "Lao";
    } else if (value === "lt") {
        return "Lithuanian";
    } else if (value === "lu") {
        return "Luba-Katanga";
    } else if (value === "lv") {
        return "Latvian";
    } else if (value === "gv") {
        return "Manx";
    } else if (value === "mk") {
        return "Macedonian";
    } else if (value === "mg") {
        return "Malagasy";
    } else if (value === "ms") {
        return "Malay";
    } else if (value === "ml") {
        return "Malayalam";
    } else if (value === "mt") {
        return "Maltese";
    } else if (value === "mi") {
        return "Maori";
    } else if (value === "mr") {
        return "Marathi";
    } else if (value === "mh") {
        return "Marshallese";
    } else if (value === "mn") {
        return "Mongolian";
    } else if (value === "na") {
        return "Nauru";
    } else if (value === "nv") {
        return "Navajo";
    } else if (value === "nd") {
        return "North Ndebele";
    } else if (value === "ne") {
        return "Nepali";
    } else if (value === "ng") {
        return "Ndonga";
    } else if (value === "nb") {
        return "Norwegian Bokmål";
    } else if (value === "nn") {
        return "Norwegian Nynorsk";
    } else if (value === "no") {
        return "Norwegian";
    } else if (value === "ii") {
        return "Sichuan Yi";
    } else if (value === "nr") {
        return "South Ndebele";
    } else if (value === "oc") {
        return "Occitan";
    } else if (value === "cu") {
        return "Church Slavic";
    } else if (value === "om") {
        return "Oromo";
    } else if (value === "or") {
        return "Oriya";
    } else if (value === "os") {
        return "Ossetian";
    } else if (value === "pa") {
        return "Panjabi";
    } else if (value === "pi") {
        return "Pali";
    } else if (value === "fa") {
        return "Persian";
    } else if (value === "pl") {
        return "Polish";
    } else if (value === "ps") {
        return "Pashto";
    } else if (value === "pt") {
        return "Portuguese";
    } else if (value === "qu") {
        return "Quechua";
    } else if (value === "rm") {
        return "Romansh";
    } else if (value === "rn") {
        return "Rundi";
    } else if (value === "ro") {
        return "Romanian";
    } else if (value === "ru") {
        return "Russian";
    } else if (value === "sa") {
        return "Sanskrit";
    } else if (value === "sc") {
        return "Sardinian";
    } else if (value === "sd") {
        return "Sindhi";
    } else if (value === "se") {
        return "Northern Sami";
    } else if (value === "sm") {
        return "Samoan";
    } else if (value === "sg") {
        return "Sango";
    } else if (value === "sr") {
        return "Serbian";
    } else if (value === "gd") {
        return "Gaelic";
    } else if (value === "sn") {
        return "Shona";
    } else if (value === "si") {
        return "Sinhala";
    } else if (value === "sk") {
        return "Slovak";
    } else if (value === "sl") {
        return "Slovene";
    } else if (value === "so") {
        return "Somali";
    } else if (value === "st") {
        return "Southern Sotho";
    } else if (value === "es") {
        return "Spanish";
    } else if (value === "su") {
        return "Sundanese";
    } else if (value === "sw") {
        return "Swahili";
    } else if (value === "ss") {
        return "Swati";
    } else if (value === "sv") {
        return "Swedish";
    } else if (value === "ta") {
        return "Tamil";
    } else if (value === "te") {
        return "Telugu";
    } else if (value === "tg") {
        return "Tajik";
    } else if (value === "th") {
        return "Thai";
    } else if (value === "ti") {
        return "Tigrinya";
    } else if (value === "bo") {
        return "Tibetan";
    } else if (value === "tk") {
        return "Turkmen";
    } else if (value === "tl") {
        return "Tagalog";
    } else if (value === "tn") {
        return "Tswana";
    } else if (value === "to") {
        return "Tongan";
    } else if (value === "tr") {
        return "Turkish";
    } else if (value === "ts") {
        return "Tsonga";
    } else if (value === "tt") {
        return "Tatar";
    } else if (value === "tw") {
        return "Twi";
    } else if (value === "ty") {
        return "Tahitian";
    } else if (value === "ug") {
        return "Uighur";
    } else if (value === "uk") {
        return "Ukrainian";
    } else if (value === "ur") {
        return "Urdu";
    } else if (value === "uz") {
        return "Uzbek";
    } else if (value === "ve") {
        return "Venda";
    } else if (value === "vi") {
        return "Vietnamese";
    } else if (value === "vo") {
        return "Volapük";
    } else if (value === "wa") {
        return "Walloon";
    } else if (value === "cy") {
        return "Welsh";
    } else if (value === "wo") {
        return "Wolof";
    } else if (value === "fy") {
        return "Western Frisian";
    } else if (value === "xh") {
        return "Xhosa";
    } else if (value === "yi") {
        return "Yiddish";
    } else if (value === "yo") {
        return "Yoruba";
    } else if (value === "za") {
        return "Zhuang";
    } else if (value === "zu") {
        return "Zulu";
    } else {
        return value;
    }
}
