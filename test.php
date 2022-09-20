<?php
class person{
    public $name;
    public $age;
    function show($n, $a){
        echo $this->name= $n;
        echo $this->age= $a;
    }
}
class Tv{
    public $display;
    public $color;
    function model(){
        $this->$display;
        $this->color;
    }
}

class test{

    public $name;
    public $age;

    function __construct($n, $a){
        $this->name= $n;
        $this->age= $a;
    }
    function show(){
        echo $this->name ."-". $this->age;

    }

}




  $p1= new person();
  $p1->show("nabeel <br>", 26);
$p2= new test("rana", 40);



  $samsung= new Tv();
  $samsung->color= "black";
  echo $samsung->color;
  $p2->show();
?>