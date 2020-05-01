<?php
require_once dirname(__FILE__, 2) . '/vendor/autoload.php';
$a = 1;
$b = 2;
$c = $a . $b;

// test

dump($c);

    if($c == 3 ) {
    dump('foo');
}
