<?php

abstract class atm{
    abstract protected function info($name, $balance);
}
class card extends atm{

    public function info($n, $b){
        echo $this->name= $n. '<br/>';
        echo $this->balance= $b;
    }
} 
$obj= new card();
$obj->info("nabeel", 5000);



?>