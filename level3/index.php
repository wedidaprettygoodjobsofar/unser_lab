<?php
/*
GC回收
*/
highlight_file(__FILE__);
class A
    {
    public $a;
    public function __destruct()
        {
        if ($this->a == 'cat /flag') {
            system('cat /flag');
            }
        }
    }
$p = $_GET['payload'];

if (isset($p)) {
    $un = unserialize($p);
    throw new Exception("You need GC");
    }
