<?php
class Hero {
    protected $name;
    public function __construct($name = "Undefined"){
        echo "Start of class <br>";
        $this->name = $name;
    }
    public function setName($name){
        $this->name = $name;
        return $this;
    }
    public function getName(){
        return $this->name;
    }
    public function display(){
        echo $this->name;
    }
    public function __destruct(){
        echo "<br>End of class";
    }
}
class Children extends Hero {
    public function __construct(){
        parent::__construct("CHILDREN");
    }
    public function setName($name){
        echo "You can not setName is $name for this parent. <br>";
        return $this;
    }
}
$binh = new Children();
    $binh->setName("Binh");
    echo $binh->display();


?>