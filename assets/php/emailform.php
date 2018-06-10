<?php
/* 2018-06-09T11:21:21+00:00
 * https://www.unixtimestamp.com/ */

/* validated with php -l emailform.php
 * no syntax errors detected */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (
    input('ttest') === '2'
    && empty($_POST['isbot'])
    && empty($_POST['btrap'])
  ) {
    email(
      'whoswho.rockart@gmail.com',
      'CdP25044',
      input('email'),
      'Blank email',
      '',
      '',
      'Who’s Who in Rock-art',
      person('', ''),
      body_to(),
      $top.$navbar.$imagetop.$texttop.body_to_web(input('email')).footer('').bottom(),
      $top.$navbar.$imagetop.$texttop.error_from().footer('').bottom(),
      $top.$navbar.$imagetop.$texttop.error_to().footer('').bottom()
    );
  } else {
    echo $top.$navbar.$imagetop.$texttop.nosnd().footer('').bottom();
  }
} else {
  echo $top.$navbar.$imagetop.$texttop.$panel1.$panel2.footer('accesses').bottom();
}
?>
