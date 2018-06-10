<?php
/* 2018-06-09T11:11:08+00:00
 * https://www.unixtimestamp.com/ */

/* validated with php -l journal-article.php
 * no syntax errors detected */

/* validated generated HTML with Nu Html Checker version 18.6.7
 * no errors or warnings to show
 * http://validator.w3.org/nu/ */

require_once 'lib.php';

$panel1 = panel('1', 'information', panel1content());
$panel2 = panel('2', 'wwr3 bibliography', panel2content());

include '../assets/php/emailform.php';

function panel1content() {
  return infoq('journal-article.yaml');
}

function panel2content() {
  return form('journal-article.php', textarea(), 'journal article');
}

function textarea() {
  return '
---
id: \'none\' # do not edit

type: \'article-journal\' # do not edit

author:
  # duplicate and edit a line to add an author
  # delete a line to delete an author
  - {family: \'Author surname\', given: \'Author first names\'}
  - {family: \'(e.g., Hobart)\', given: \'(e.g., John)\'}
  - {family: \'(e.g., Smits)\', given: \'(e.g., Lucas G. Alfonsus)\'}

issued: {date-parts: [[\'Year (e.g., 2002)\', \'Month (e.g., 03)\']]}

title: \'Title of article\' # (e.g., Fishing in the Lesotho Highlands)

shortTitle: \'…\' # (blank if none)

container-title: \'Title of journal\' # (e.g., Antiquity)

journalAbbreviation: \'…\' # (blank if none)

collection-title: \'Title of series\' # (blank if none)

page: \'…\' # (e.g., 39-40)

volume: \'…\' # (e.g., 76)

issue: \'…\' # (e.g., 291)

abstract: \'(e.g., In 1984, the Lesotho ARAL project ….\' # (blank if none))

URL: \'(e.g., https://doi.org/… )\' # (blank if none)

DOI: \'(e.g., 10.1017/S0003598X00089754)\' # (blank if none)

ISSN: \'(e.g., 0003-598X, 1745-1744)\' # (blank if none)

note: \'…\' # (blank if none)
';
}
?>
