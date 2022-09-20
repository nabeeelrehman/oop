<?php
// interface  suport multiple inheritance
// interface contain 1 abstract function
// No constructor in interface
// in interface we can not define variables
//  All function must be public 

interface class1{
    public function abc();
}
interface class2{
    public function test();
}

class class3 implements class1, class2{
    public function abc(){
        echo "ABC function" . '<br/>';

    }
    public function test(){

    echo "Test Function";
    }

}

$obj= new class3();
$obj->abc();
$obj->test();
?>