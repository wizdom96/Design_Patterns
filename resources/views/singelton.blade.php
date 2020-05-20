<?php

class Connection {

    private function __construct(){

        echo 'New object created <br>';
    }

    //Singelton pattern
    
    public static function getInstance(){

        static $instance = null;

        if(null == $instance){
            $instance = new static();
        } else {
            echo 'Using existing object <br>';
        }
        return $instance;
    }
}

/* connect only once to the database, 
can t create other instances of it 
*/
$object = Connection::getInstance();
$object1 =  Connection::getInstance();
$object2 =  Connection::getInstance();