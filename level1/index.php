<?php
/*
一个简单的pop链构造
迈出pop链构造的第一步吧
*/
highlight_file(__FILE__);
class php
    {
    public $curl;
    public function __destruct()
        {
        echo ("action!<br>");
        $function = $this->curl;
        $function();#$this->known();  invoke
        }
    }

class is
    {
    public $http;
    public $sql;
    public function __invoke()
        {
        echo ("invoke!<br>");
        return $this->http->sql;#$this->known->unknown;  get
        }

    }

class best
    {
    public $unserialize;
    public function __get($var)
        {
        echo ("get!<br>");
        system('cat /flag'); #危险函数
        }
    }
$p = $_GET['payload'];
if (isset($p)) {
    unserialize($p);
    }
?>