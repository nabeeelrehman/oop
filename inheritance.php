 <?php
 
 class employee{
    public $name;
    public $age;
    public $salary;
    function __construct($n, $a, $s){
        $this->name= $n;
        $this->age= $a;
        $this->salary= $s; 
    }
    function info(){
        echo "Employee Name:". $this->name .'</br>';
        echo "Employee Age:" . $this->age . '</br>';
        echo "Employee Salary:" . $this->salary .'<br/>';
    }
 }
 class manager extends employee{
    public $ta= 2000;
    public $mobile= 3000;
    public $totalsalry;
    function info(){
        $this->totalsalry= $this->salary + $this->ta + $this->mobile;
        echo "Manager Name:". $this->name .'</br>';
        echo "Manager Age:" . $this->age . '</br>';
        echo "Manager Salary:" . $this->totalsalry .'<br/>';
    }


 }
 
 $employee = new employee('nabeel', 30, 30000);
 $employee->info();
 $man = new manager('hassan', 35, 70000);
 $man->info();
 
 ?>