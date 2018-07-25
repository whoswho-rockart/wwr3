<?php
/* 2018-07-25T03:58:07+00:00
 * https://www.unixtimestamp.com/ */

/* validated with php -l lib.php
 * no syntax errors detected */

require_once '../assets/php/lib.php';

$top = top(
  cntnt()['wwr3t'], cntnt()['wwrtc'],
  cntnt()['wwrtc'], cntnt()['wwrkw'],
  cntnt()['wwr3a'], cntnt()['jsreq']
);

$navbar = navbar(
  cntnt()['intro'], cntnt()['main_'],
  cntnt()['booka'], cntnt()['bookb'],
  cntnt()['journ'], cntnt()['confp']
);

$imagetop = imagetop();

$texttop = texttop(
  cntnt()['wwr3t'], cntnt()['cwras'],
  cntnt()['pwtdw']
);

function infoq($file) {
  return '
      <p>
        Details for wwr3 publication (print and web/app), and offline
        archive.
      </p>
      <p>
        The template format is YAML (<a href="http://yaml.org/"
        class="text-muted">yaml.org</a>). Text following hash symbols
        (#) are comments. The form uses the JS-YAML parser for colour
        highlighting (<a href="https://nodeca.github.io/js-yaml/"
        class="text-muted">nodeca.github.io/js-yaml</a>).
      </p>
      <p>
        If you wish to edit the template offline, the best approach
        is to install a code editor like Notepad++ (Windows,
        <a href="https://notepad-plus-plus.org/"
        class="text-muted">notepad-plus-plus.org</a>), Xcode (MacOS,
        <a href="https://developer.apple.com/xcode/"
        class="text-muted">developer.apple.com/xcode</a>), Geany (MacOS
        and Windows, <a href="https://geany.org/Download/Releases"
        class="text-muted">geany.org/Download/Releases</a>), Textastic
        (iOS, MacOS, <a href="https://www.textasticapp.com/"
        class="text-muted">www.textasticapp.com</a>), or Quoda (Android,
        <a href="http://getquoda.com/"
        class="text-muted">getquoda.com</a>).
      </p>
      <p>
        Copy the template, open a code editor and save as '.$file.'.
      </p>
      <p>
        Send the file to whoswho.rockart (at) gmail.com or use the
        “send” button below.
      </p>
      <p>
        You may send other bibliography formats (e.g., BibTeX, Endnote
        XML, RIS). For complete list of accepted formats, see
        <a href="https://www.zotero.org/support/import_formats"
        class="text-muted">https://www.zotero.org/support/import_formats</a>.
      </p>
    ';
}

function cntnt() {
  return array (
    'booka' => 'book',
    'bookb' => 'book section',
    'cntct' => 'whoswho.rockart (at) gmail.com',
    'confp' => 'conference paper',
    'cpsnd' => 'Copy and fill in the details below and send them to',
    'ddmnu' => 'Please use drop down menu to return to main page.',
    'cwras' => 'the changing world of rock-art studies',
    'email' => 'email: ',
    'fbelw' => 'The information sent follows below.',
    'intro' => 'introduction',
    'isbot' => ' I am a robot',
    'journ' => 'journal article',
    'jsreq' => 'JavaScript required to view this page',
    'main_' => 'main entry',
    'nocpy' => 'The mail server failed to send you a copy of the form.',
    'noeml' => 'You omitted an email address to send a copy of the '
               .'information compiled for Who’s Who in Rock-art.',
    'nosrv' => 'The mail server failed to send the information '
               .'compiled for Who’s Who in Rock-art.',
    'pveml' => 'Contact whoswho.rockart (at) gmail.com if you wish to '
              .'provide one.',
    'pwtdw' => 'people, what they do and where',
    'robot' => 'Form not sent. A script determined input by '
              .'a robot.',
    'rteml' => 'You may email whoswho.rockart (at) gmail.com with '
              .'correct details.',
    'tarea' => 'Compiled information:',
    'thnks' => 'Thank you for compiling information for '
              .'Who’s Who in Rock-art.',
    'ttest' => 'Human check: ',
    'wwr3a' => 'wwr3',
    'wwr3t' => 'Who’s Who in Rock-art, third edition  (wwr3)',
    'wwrkw' => 'who’s who, rock art',
    'wwrtc' => 'Who’s Who in Rock-art'
  );
}
?>
