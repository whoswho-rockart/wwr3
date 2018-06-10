<?php
/* 2018-06-09T11:05:29+00:00
 * https://www.unixtimestamp.com/ */

/* validated with php -l conference-paper.php
 * no syntax errors detected */

/* validated generated HTML with Nu Html Checker version 18.6.7
 * no errors or warnings to show
 * http://validator.w3.org/nu/ */

require_once 'lib.php';

$panel1 = panel('1', 'information', panel1content());
$panel2 = panel('2', 'wwr3 bibliography', panel2content());

include '../assets/php/emailform.php';

function panel1content() {
  return infoq('conference-paper.yaml');
}

function panel2content() {
  return form('conference-paper.php', textarea(), 'conference paper');
}

function textarea() {
  return '
---
id: \'none\' # do not edit

author:
  # duplicate and edit a line to add an author
  # delete a line to delete an author
  - {family: \'Author surname\', given: \'Author first names\'}
  - {family: \'(e.g., Fossati)\', given: \'(e.g., Angelo Eugenio)\'}

editor:
   # duplicate and edit a line to add an editor
   # delete a line to delete an editor
  - {family: \'Author surname\', given: \'Author first names\'}
  - {family: \'(e.g., Troletti)\', given: \'(e.g., Federico)\'}

type: \'paper-conference\' # do not edit

issued: {date-parts: [[\'Year (e.g., 2015)\']]}

title: \'Title of conference paper\'

container-title: \'Title of proceedings\' # (e.g., Proceedings of …)

page: \'…\' # (e.g., 130-137)

volume: \'…\' # (e.g., I)

number-of-volumes: \'…\' # (e.g., 2)

event: \'…\' # (e.g., Prospects for the Prehistoric Art Research)

event-place: \'…\' # (e.g., Capo di Ponte, Brescia)

abstract: \'(e.g., This paper examines ….)\' # (blank if none))

publisher: \'…\' # (e.g., Oxford University Press)

publisher-place: \'…\' # (e.g., New York, NY)

URL: \'(e.g., https://doi.org/… )\' # (blank if none)

DOI: \'(e.g., 10.1017/S0003598X00089754)\' # (blank if none)

ISSN: \'(e.g., 0003-598X, 1745-1744)\' # (blank if none)

note: \'…\' # (blank if none)
';
}
?>
