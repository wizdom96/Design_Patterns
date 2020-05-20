<?php

class Lowcost extends AbstractVehicle{

    public function call(){

        return 'A: ' . $this->cars[array_rand($this->cars)] . ' car is coming to get you.(Lowcost) ';
    }

}

class Expencive extends AbstractVehicle{

    
    public function call(){

        return 'B: ' . $this->cars[array_rand($this->cars)] . ' car is coming to get you.(Expencive) ';
    }
}

 abstract class AbstractVehicle{

    protected $cars = [];

    public function __construct(array $cars){
        $this->cars = $cars;
    }
    abstract public function call();
 }

 class VehicleFactory{

    public static function getVehicle(string $type) : AbstractVehicle{
        switch($type){
            case 'Expencive':
                return new Expencive(['Mercedes', 'BMW', 'Lamborgini']);
            case 'Lowcost':
                 return new Lowcost(['Toyota', 'Peugeot', 'Fiat']);
            default:
            throw new \Exception('Type is not valid');
           }
        }
    }

    function simpleFactory(){

        $lowcost = VehicleFactory::getVehicle('Lowcost');  
        $expencive =VehicleFactory::getVehicle('Expencive');
         
       return ($lowcost->call() . '<br>' . $expencive->call());
    }

     echo(simpleFactory());

 

      