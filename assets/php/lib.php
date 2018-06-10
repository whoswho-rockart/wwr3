<?php
/* 2018-06-09T11:20:23+00:00
 * https://www.unixtimestamp.com/ */

/* validated with php -l lib.php
 * no syntax errors detected */

function email(
$from,
$passwd,
$to,
$email0,
$to2,
$cc,
$subject,
$body_from,
$body_to,
$body_to_web,
$error_from,
$error_to
) {
  /* github.com/PHPMailer/PHPMailer/blob/master/examples/gmail.phps
   * $mail->SMTPDebug = 0 // no output (production use)
   * $mail->SMTPDebug = 1 // client output
   * $mail->SMTPDebug = 2 // client & server output
   * $mail->Port = 25;    // SMTP 25, 465, 587
   * if (!$mail->send()) {echo $mail->ErrorInfo';}
   */
  date_default_timezone_set('Etc/UTC');
  if (!empty($to)) {
    $to_ = $to;
  } else {
    $to_ = $email0;
  }
  require_once '../assets/php/PHPMailer/PHPMailerAutoload.php';
  $host_ = 'smtp.gmail.com';
  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->Debugoutput = 'html';
  $mail->IsHTML(False);
  $mail->CharSet = 'UTF-8';
  $mail->ContentType = 'text/plain';
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';
  $mail->SMTPAuth = true;
  $mail->Username = $from;
  $mail->Password = $passwd;
  $mail->Subject = $subject.' '.$to;
  $mail->setFrom($from, $to_);
  if ($to_ !== $email0) {
    $mail->addReplyTo($to);
  }
  $mail->addAddress($from);
  if (!empty($to2)) {
    $mail->addAddress($to2);
  }
  if (!empty($cc)) {
    $mail->AddCC($cc);
  }
  $mail->Body = $body_from;
  if (!$mail->send()) {
    echo $error_from;
  } else {
    if (!empty($to)) {
      $mailA = new PHPMailer();
      $mailA->isSMTP();
      $mailA->SMTPDebug = 0;
      $mailA->Debugoutput = 'html';
      $mailA->IsHTML(False);
      $mailA->CharSet = 'UTF-8';
      $mailA->ContentType = 'text/plain';
      $mailA->Host = 'smtp.gmail.com';
      $mailA->Port = 587;
      $mailA->SMTPSecure = 'tls';
      $mailA->SMTPAuth = true;
      $mailA->Username = $from;
      $mailA->Password = $passwd;
      $mailA->Subject = $subject;
      $mailA->setFrom($from, $subject);
      $mailA->addReplyTo($from);
      $mailA->addAddress($to);
      $mailA->Body = $body_to;
      if (!$mailA->send()) {
        echo $error_to;
      } else {
        echo $body_to_web;
      } 
    } else {
      echo $body_to_web;
    }
  }
}

function body_to() {
  $a = cntnt();
  return ''
  ."\n".$a['thnks']
  ."\n".$a['fbelw']
  ."\n".person('', '');
}

function body_to_web($to) {
  $a = cntnt();
  if (empty($to)) {
    $isemail = $a['noeml'].' '.$a['pveml'];
  } else {
    $isemail = '';
  }
  return isweb($isemail);
}

function error_to() {
  $a = cntnt();
  $isemail = $a['nocpy'].' '.$a['rteml'];
  return isweb($isemail);
}

function isweb($isemail) {
  $a = cntnt();
  return ''
  ."\n".'<p>'.$a['thnks'].'</p>'
  ."\n".'<p>'.$a['ddmnu'].'</p>'
  ."\n".'<p>'.$a['fbelw'].'</p>'
  ."\n".'<p>'.'————'.'</p>'
  ."\n".'<p>'.person('1', $isemail).'</p>'
  ."\n";
}

function person($isweb, $isemail) {
  $a = cntnt();
  if (!empty($isweb)) {
    $br = '<br>';
    $emdashes = '';
    $dashes = '';
    $tarea = '<pre>'.$_POST['tarea'].'</pre>';
  } else {
    $br = '';
    $emdashes = '————'."\n";
    $dashes = "\n".$br;
    $tarea = $_POST['tarea'];
  }
  if (empty($isemail)) {
    $isemail = input('email');
  }
  return ''
  .$emdashes
  .$a['email'].$isemail
  ."\n".$br
  ."\n".$br.$tarea;
}

function error_from() {
  $a = cntnt();
  return ''
  ."\n".'<p>'.$a['nosrv'].'</p>'
  ."\n".'<p>'.$a['ddmnu'].'</p>'
  ."\n";
}

function nosnd() {
  $a = cntnt();
  return ''
  ."\n".'<p>'.$a['robot'].'</p>'
  ."\n".'<p>'.$a['ddmnu'].'</p>'
  ."\n";
}

function checkbox($name, $text, $isweb) {
  if (!empty($isweb)) {
    $web = '[   ]';
  } else {
    $web = '[  ]';
  }
  if (isset($_POST[$name])) {
    return '[✘]'.$text;
  } else {
    return $web.$text;
  }
}

function input($a) {
  return clean_post($_POST[$a]);
}

function ifset($a) {
  if (isset($_POST[$a])) {
    return '1';
  } else {
    return '';
  }
}

function clean_post($a) {
  $a = stripslashes(trim($a));
  return htmlspecialchars($a, ENT_QUOTES);
}

function top(
  $title, $description, $author, $keywords, $application_name, $noscript
  ) {
  return '<!DOCTYPE html>
<html id="page-head" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>'.$title.'</title>
<meta name="description" content="'.$description.'">
<meta name="author" content="'.$author.'">
<meta name="keywords" content="'.$keywords.'">
<meta name="application-name" content="'.$application_name.'">
<meta name="msapplication-config" content="../assets/favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicons/favicon-16x16.png">
<link rel="manifest" href="../assets/favicons/manifest.json">
<link rel="mask-icon" color="#5bbad5" href="../assets/favicons/safari-pinned-tab.svg">
<link rel="shortcut icon" href="../assets/favicons/favicon.ico">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/jumbotron-narrow.css">
<link rel="stylesheet" href="../assets/css/codemirror.css">
<link rel="stylesheet" href="../assets/css/js-yaml-demo.css">
<style>textarea {white-space: pre;}</style>
</head>

<body>
<!--[if lte IE 9]><p>(cf., https://browsehappy.com/)</p><![endif]-->
<div class="container">
<noscript><p>'.$noscript.'</p></noscript>
';
}

function navbar($home, $main, $book, $book_section, $journal_article, $conference_paper) {
  return '
<nav id="navbar-top" class="navbar navbar-default">
  <div class="container-fluid">
    <div id="navbar-header" class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">wwr3</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul id="nav" class="nav navbar-nav navbar-right">
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <span>menu </span>
          <span class="caret"></span>
        </a>
        <ul id="dropdown-menu" class="dropdown-menu">
          <li><a href="./index.php" onclick="">'.$home.'</a></li>
          <li><a href="./main.php" onclick="">'.$main.'</a></li>
          <li><a href="./book.php" onclick="">'.$book.'</a></li>
          <li><a href="./book-section.php" onclick="">'.$book_section.'</a></li>
          <li><a href="./journal-article.php" onclick="">'.$journal_article.'</a></li>
          <li><a href="./conference-paper.php" onclick="">'.$conference_paper.'</a></li>
        </ul>
      </ul>
    </div>
  </div>
</nav>
';
}

function imagetop() {
  return '
<div id="page-image">
  <img class="img-responsive center-block" alt="../assets/images/wwr3.jpg" src="../assets/images/wwr3.jpg">
</div>
';
}

function texttop($a, $b, $c) {
  return '
<h2>
  <small>'.$a.'</small>
</h2>

<p id="body-text">
  '.$b.'<br>
  '.$c.'
</p>
<hr>
';
}

function panel($target, $title, $content) {
  return '
<div class="panel panel-default">
  <div class="panel-heading" data-target="#'.$target.'" data-toggle="collapse" role="button">
    <div class="panel-title">
      <span class="text-muted">'.$title.'</span>
    </div>
  </div>
  <div class="panel-collapse collapse in" id="'.$target.'" role="tabpanel">
    <div class="panel-body">'.$content.'</div>
  </div>
</div>
';
}

function form($action, $textarea, $label1) {
  return '
      <form accept-charset="utf-8" action="'.$action.'" id="form1" method=
      "post" name="form1" onsubmit="">
        <span class="help-block">'.$label1.'</span>
        <div class="form-group">
          <label class="sr-only"></label>
          <div class="src">
            <textarea class="form-control" id="tarea" name="tarea">'.$textarea.'</textarea>
          </div>
          <!-- /div class="src" -->
        </div>
        <hr>
        <span class="help-block">contact email</span>
        <div class="form-group">
          <label class="sr-only">email</label>
          <input class="form-control" name="email" placeholder="email" type="text" value="">
        </div>
        <hr>
        <span class="help-block">human test</span>
        <div class="form-group">
          <label class="sr-only">1 + 1 = ?</label>
          <input class=
          "form-control" name="ttest" placeholder="1 + 1 = ?" type="text" value="">
        </div>
        <div class="checkbox">
          <label><input name="isbot" onclick="" type="checkbox" value="isbot">
            <span class="text-muted">I am a robot</span>
          </label>
        </div>
        <div class="form-group">
          <label class="sr-only"></label>
          <input class=
          "form-control invisible hide" name="btrap" placeholder="" type="text" value="">
        </div>
        <hr>
        <div class="form-group">
          <input name="utf8" type="hidden" value=
          "&#x2713;"><button class="btn text-muted" name="posted"
          onclick="" type="submit" value="posted">send</button>
        </div>
      </form>
    ';
}

function footer($accesses) {
  include_once '../assets/php/pri.php';
  if (!empty($accesses)) {
    $accesses = 'Nº '.$accesses.': '.pri();
  } else {
    $accesses  = '';
  }
  return '
<footer id="footer" class="footer">
  <small id="footer-a" class="pull-right text-muted">'.$accesses.'</small>
  <small>
    <a href="https://github.com/Project4Dimensions" class="text-muted">Project4Dimensions</a>
  </small>
</footer>
<p> </p>';
}

function bottom() {
  return '
</div>
<!-- /div class="container" -->

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/js-yaml-demo.js"></script>
</body>
</html>';
}
?>
