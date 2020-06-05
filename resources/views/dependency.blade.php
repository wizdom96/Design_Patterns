<?php

class Chest{

    protected $lock;
    protected $isClosed;

    public function __construct(Lock $lock){  //dependency injection
        $this->lock = $lock;
    }

    public function close($lock = true){
        if($lock === true){
            $this->lock-> lockit();
        }
        $this->isClosed = true;

        echo 'Closed';
    }

    public function open(){
        if($this->lock->isLocked()){
            $this->lock->unlock();
        }

        $this->isClosed = false;

        echo 'Open';
    }

    public function isClosed(){

    }
}



class Lock{

    protected $isLocked;

    public function lockit(){

        $this->isLocked = true;
    }

    public function unlock(){
        $this->isLocked = false;
    }

    public function isLocked(){
        return $this->isLocked;
    }
}


$chest = new Chest(new Lock);

$chest->close();
$chest->open();