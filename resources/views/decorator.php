<?php

//Component
interface Logger{
    public function log($msg);
}

//Concrete Component

class FileLogger implements Logger{

    public function log($msg){
        echo "<p>Logging to a <b>FILE</b>: {$msg} </p>";
    }
}

//Decorator 

abstract Class LoggerDecorator implements Logger{
    protected $logger;

    public function __construct(Logger $logger){

        $this->logger = $logger;
    }

     public function log($msg){

        $this->logger->log($msg);
     }
} 

class EmailLogger extends LoggerDecorator{

    public function log($msg){
        $this->logger->log($msg);
        echo "<p>Logging to a <b>EMAIL</b>: {$msg} </p>";
    }
}

class FaxLogger extends LoggerDecorator{

    public function log($msg){
        $this->logger->log($msg);
        echo "<p>Logging to a <b>FAX</b>: {$msg} </p>";
    }
}


$log = new FileLogger();
$log = new EmailLogger($log);
$log = new FaxLogger($log);

$log->log("saving file");