<?php
header("Content-Type: application/json; charset=UTF-8");
$obj=json_decode($_POST['x'],false);
class Person{
    public $name;
    public $age;
    function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
}
$hung=new Person($obj->name,25);
echo json_encode($hung);