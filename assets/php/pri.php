<?php
/* 2018-06-09T09:13:42+00:00
 * https://www.unixtimestamp.com/ */

/* validated with php -l pri.php
 * no syntax errors detected
 */

/* phpCounter: an algorithm to determine page retrieval instances (pri)
 * see https://github.com/Project4Dimensions/phpCounter
 */

function pri() {
    $filename = basename($_SERVER['SCRIPT_FILENAME'], ".php") . ".num";

    if (file_exists($filename)) {
        if (intval(file_get_contents($filename)) === 0) {
            $num = 1;
        } else {
            $num = intval(file_get_contents($filename)) + 1;
        }
    } else {
        $num = 1;
    }

    try {
        error_reporting(0);
        if (file_put_contents($filename, $num, LOCK_EX) === FALSE) {
            throw new Exception("err");
        } else {
            file_put_contents($filename, $num, LOCK_EX);
            return strval($num);
        }
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
?>
