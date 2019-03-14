<?php
require 'autoload.php';

$t0 = new Timer\Timer();
for ($i = 0; $i < 10000000; $i++) {
    $x = mt_rand();
}
$t1 = new Timer\Timer();
// 输出时间差，t1 - t0
echo $t1->sub($t0);
echo PHP_EOL;
