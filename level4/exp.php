<?php
class A
    {
    public $a, $c, $x, $y;

    }
class B
    {
    public $b;
    }
$A1 = new A;
$A2 = new A;
$B1 = new B;
$B2 = new B;
$A1->a = &$A1->x;
$A1->y = $B1;
$B1->b = $A2;
$A2->c = $B2;
echo serialize($A1);