<?php
/* 2018-06-09T10:11:58+00:00
 * https://www.unixtimestamp.com/ */

/* validated with php -l book.php
 * no syntax errors detected */

/* validated generated HTML with Nu Html Checker version 18.6.7
 * no errors or warnings to show
 * http://validator.w3.org/nu/ */

require_once 'lib.php';

$panel1 = panel('1', 'information', panel1content());
$panel2 = panel('2', 'wwr3 bibliography', panel2content());

include '../assets/php/emailform.php';

function panel1content() {
  return infoq('book.yaml');
}

function panel2content() {
  return form('book.php', textarea(), 'book');
}

function textarea() {
  return '
---
id: \'none\' # do not edit

type: \'book\' # do not edit

author:
  # duplicate and edit a line to add an author
  # delete a line to delete an author
  - {family: \'Author surname\', given: \'Author first names\'}
  - {family: \'(e.g., Smits)\', given: \'(e.g., Lucas G. Alfonsus)\'}

editor:
  # duplicate and edit a line to add an editor
  # delete a line to delete an editor
  - {family: \'Editor surname\', given: \'Editor first names\'}
  - {family: \'(e.g., Meyers)\', given: \'(e.g., Eric M)\'}

issued: {date-parts: [[\'Year (e.g., 1997)\']]}

title: \'Title of book\'

collection-title: \'Title of series\' # (blank if none)

collection-number: \'Series number (e.g., 1)\' # (blank if none)

volume: \'(e.g., 1)\' # (blank if none)

number-of-volumes: \'(e.g., 4)\' # (blank if none)

number-of-pages: \'…\' # (e.g., 2600)

edition: \'(e.g., 1)\'

publisher: \'…\' # (e.g., Oxford University Press)

publisher-place: \'…\' # (e.g., New York, NY)

abstract: \'(e.g., This work analyses ….)\' # (blank if none)

URL: \'(e.g., https://doi.org/…)\' # (blank if none)

ISBN: \'(e.g., 978-0-19-506512-1)\' # (blank if none)

note: \'…\' # (blank if none)
';
}
?>
