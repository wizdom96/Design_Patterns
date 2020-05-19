<?php


abstract class CarPrototype{
     
    protected $name;
    protected $model;
    
    abstract function __clone();

        function getModel(){
            return $this->model;
        }

        function setModel($model) {
            $this->model = $model;
        }

        function getName() {
            return $this->name;
        }
  }
    class AudiCarPrototype extends CarPrototype{

        function __construct(){
            $this->name = 'Audi';
        }
        function __clone(){
    }
    }
    class BmwCarPrototype extends CarPrototype{

        function __construct(){
        $this->name = 'Bmw';
    }
    function __clone(){
    }
}



        //test
        $audiProto = new AudiCarPrototype();
        $bmwProto = new BmwCarPrototype();
        $car1 = clone $audiProto;
        $car1->setModel('A7');
        echo('Name : ' . $car1->getName() . "<br>");
        echo('Model : ' . $car1->getModel() . "<br>");
        echo("<br>");
        $car2 = clone $bmwProto;
        $car2->setModel('X25');
        echo('Name : ' . $car2->getName() . "<br>");
        echo('Model : ' . $car2->getModel() . "<br>");
        echo("<br>");
