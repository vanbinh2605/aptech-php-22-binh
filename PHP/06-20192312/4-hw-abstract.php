<?php
abstract class Binh{
    protected $name;
    public function __construct($name = "Underfined"){
        $this->name =$name;
    }
    abstract public function setName($name);
    abstract public function getName();
    public function display(){
        echo "This one is a hero, his/her name is $this->name";
    }
}
class An extends Binh {
    public function setName($name){
        $this->name = $name;
        return $this;
    }
    public function getName(){
        return $this->name;
    }
}
$an= new An;
$name = $an->setName("An")->getName();
echo $name . "<br>";
$an->setName("VanAn")->display();




?>