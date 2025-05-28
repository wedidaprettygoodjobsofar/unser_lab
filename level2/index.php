<?php
/*
私有属性变量+关键字绕过，PHP7.1 后对 private 和 protect 已不敏感
私有属性变量一定要url编码，会有不可见字符\00
*/
highlight_file(__FILE__);
class A
    {
    private $a;
    public function __destruct()
        {

        if ($this->a == "cat /flag")
            system("cat /flag");
        }
    }
$p = $_GET['payload'];
if (isset($p)) {

    if (preg_match('/^[O]:[\d]+/i', $p))
        die("no1");
    if (preg_match('/flag/', $p))
        die("no2");
    unserialize($p);
    }
?>