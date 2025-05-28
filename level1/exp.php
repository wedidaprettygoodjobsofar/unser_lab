<?php
class php
    {
    public $curl;
    }
class is
    {
    public $http;
    public $sql;
    }
class best
    {
    public $unserialize;
    }
$p = new php;
$i = new is;
$b = new best;
$p->curl = $i;
$i->http = $b;
echo serialize($p);