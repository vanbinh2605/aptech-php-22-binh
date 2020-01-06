<?php
class Project {
    protected $name;
    public static function helloWorld(){
        echo "Hello World. <br>";
    }
    public function __contruct($name = "Underfiend"){
        echo "Begin of class <br>";
        $this ->name = $name;
    }
public function setName($name){
    return $this->name;
}
public function display(){
    echo $this->name . "<br>";
}
public function __destruct(){
    echo "End of class. <br>";
}
}
Project::helloWorld();
$antimage = new Project;
$antimage->setName("ANTIMAGE");
echo $antimage->display();
?>