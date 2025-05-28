<?php
/*
反复调用+wakeup赋值
 */
highlight_file(__FILE__);
class A
    {
    public $a, $c, $x, $y;
    public function __wakeup()
        {
        $this->a = "try";
        }
    public function __destruct()
        {
        $this->x = $this->y;
        echo $this->a;
        }
    public function __get($var)
        {
        $f = $this->c;
        return $f();
        }
    }
class B
    {
    public $b;
    public function __tostring()
        {
        return $this->b->lll;
        }
    public function __invoke()
        {
        echo "flag{test}";
        return;
        }
    }
$p = $_GET['payload'];

if (isset($p)) {
    $un = unserialize($p);
    }
