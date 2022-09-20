<?php
// class person{
//     public $name;
//     public $age;
//     public function show($n, $a){
//     echo  $this->name = $n;
//     echo  $this->age  = $a;
//     }
// }
// $p1= new person();
// $p2= new person();
// $p1->show('nabeel rehman', 20);
// $p2->show('imran', 20);

// class Tv{
//     public $model = "abc";
//     public $volume = 1;

//     function volumeUp(){
//         $this->volume++;
//     }
//     function volumeDown(){
//         $this->volume--;
//     }
// }
// $samsung = new Tv();
// $samsung->volumeUp();
// echo $samsung->volume. '<br/>';

// $nobel = new Tv();
// $nobel->volumeUp();
// $nobel->volumeUp();
// echo $nobel->volume;

class Tv{
    public $color;
    public $display;
    function model($c, $d){
        $this->color= $c;
        $this->display= $d;
    }
}
$samsung = new Tv;
$samsung->model("black", "HD");
// $samsung->color = "black";
// $samsung->display = "HD";
echo $samsung->color. "<br/>";
echo $samsung->display;


?>