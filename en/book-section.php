<?php
/* 2018-06-09T10:15:13+00:00
 * https://www.unixtimestamp.com/ */

/* validated with php -l book-section.php
 * no syntax errors detected */

/* validated generated HTML with Nu Html Checker version 18.6.7
 * no errors or warnings to show
 * http://validator.w3.org/nu/ */

require_once 'lib.php';

$panel1 = panel('1', 'information', panel1content());
$panel2 = panel('2', 'wwr3 bibliography', panel2content());

include '../assets/php/emailform.php';

function panel1content() {
  return infoq('book-section.yaml');
}

function panel2content() {
  return form('book-section.php', textarea(), 'book section');
}

function textarea() {
  return '
---
id: \'none\' # do not edit

type: \'chapter\' # do not edit

author:
  # duplicate and edit a line to add an author
  # delete a line to delete an author
  - {family: \'Author surname\', given: \'Author first names\'}
  - {family: \'(e.g., Stoddart)\', given: \'(e.g., Simon)\'}

editor:
  # duplicate and edit a line to add an editor
  # delete a line to delete an editor
  - {family: \'Editor surname\', given: \'Editor first names\'}
  - {family: \'(e.g., Boyd)\', given: \'(e.g., Michael J)\'}

issued: {date-parts: [[\'Year (e.g., 2015)\']]}

title: \'Title of chapter or section\'
shortTitle: \'…\' # (blank if none)

container-title: \'Title of book\'

collection-title: \'Title of series\' # (blank if none)

collection-number: \'Series number (e.g., 1)\' # (blank if none)

page: \'…\' # (e.g., 130-137)

volume: \'(e.g., 1)\' # (blank if none)

number-of-volumes: \'(e.g., 4)\' # (blank if none)

edition: \'(e.g., 1)\'

publisher: \'…\'  # (e.g., Cambridge University Press)

publisher-place: \'…\' # (e.g., New York, NY)

abstract: \'(e.g., This chapter analyses ….)\' # (blank if none)

URL: \'(e.g., http://www.cambridge.org/…)\' # (blank if none)

ISBN: \'(e.g., 978-1-107-08273-1)\' # (blank if none)

note: \'…\' # (blank if none)
';
}
?>
