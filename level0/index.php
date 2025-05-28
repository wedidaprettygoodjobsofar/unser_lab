<?php
/*
介绍一些常见的魔术方法和它们的触发方法
*/
highlight_file(__FILE__);
class A
    {
    public $a;
    public $b;
    public $c;
    public $d;
    public $e;
    public function __wakeup()
        {
        echo "wakeup总是最先触发</br>\n";
        }
    public function __unserialize($data)
        {
        echo $data . "</br>\n";
        echo "unserialize在php执行unserialize时自动触发(php>=7.4可用)</br>\n";
        $this->a = $data['a'];
        $this->b = $data['b'];
        $this->c = $data['c'];
        $this->d = $data['d'];
        $this->e = $data['e'];
        }
    public function __construct()
        {
        echo "contruct在php执行serialize时自动触发</br>\n";
        }
    public function __destruct()
        {
        echo "destruct在php执行unserialize时自动触发</br>\n";
        $function = $this->a;
        $function();
        }
    public function __invoke()
        {
        echo "invoke在变量被当做函数调用时触发</br>\n";
        return $this->b->unknown;
        }
    public function __get($var)
        {
        echo "get在读取不可访问的属性时触发</br>\n";
        echo "var=" . $var . "</br>\n";
        return $this->c->flag();
        }
    public function __call($method, $args)
        {
        echo "call在调用不可访问的方法时触发</br>\n";
        echo "var=" . $method . "</br>\n";
        echo "args=" . $args . "</br>\n";
        $this->d->unknown = 'set';
        return;
        }
    public function __set($name, $value)
        {
        echo "set在对不可访问的属性赋值时触发</br>\n";
        echo "name=" . $name . "</br>\n";
        echo "value=" . $value . "</br>\n";
        echo $this->e;
        return "";
        }
    public function __tostring()
        {
        echo "toString在变量当作字符串使用时触发";
        return "";
        }
    }
echo "执行serialize</br>\n";
$A = new A();
$A->a = $A;
$A->b = $A;
$A->c = $A;
$A->d = $A;
$A->e = $A;
$p = serialize($A);
echo "执行unserialize</br>\n";
unserialize($p);
?>