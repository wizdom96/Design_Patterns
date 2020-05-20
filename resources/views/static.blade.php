<?php


//static factory method


class BankAccount{

    private $balance;

    private function __construct(int $balance){

        $this->balance = $balance;
    }

    public static function withBalance($balance){

        return new static($balance);
    }

    public function getBalance():string{
        
        return 'Your balance is: ' . $this->balance . ' $';
    }

}

$bankAccount = BankAccount::withBalance(21548);
echo $bankAccount->getBalance();