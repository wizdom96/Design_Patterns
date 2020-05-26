<?php

class TaxCalculator
{
    private $amount;
    private $rate;
 
    public function setAmount($amount)
    {
        $this->amount = $amount;
 
        return $this;
    }
 
    public function getAmount()
    {
        return $this->amount;
    }
 
    public function setRate($rate)
    {
        $this->rate = $rate;
 
        return $this;
    }
 
    public function getRate()
    {
        return $this->rate;
    }
 
    public function calculate()
    {
        return $this->amount * $this->rate;
    }
}

interface AdapterInterface
{
    public function calculate();
}
 
class TaxCalculatorAdapter implements AdapterInterface
{
    public $taxCalculator;
 
    public function __construct(TaxCalculator $taxCalculator)
    {
        $this->taxCalculator = $taxCalculator;
    }
 
    public function calculate()
    {
        return $this->taxCalculator->getAmount() * $this->taxCalculator->getRate();
    }
}
 
$taxCalculator = new TaxCalculator();
$taxCalculator->setAmount(100)->setRate(0.5);
 
$taxCalculatorAdapter = new TaxCalculatorAdapter($taxCalculator);
echo $taxCalculatorAdapter->calculate();