<?php
class Bank
{
    private $amount;

    public function __construct($sum)
    {
        $this->amount = $sum;
    }

    public function getamount() {
        return $this->amount;
    }

    public function add($sum) {
        $this->amount += $sum;

        return $this->amount;
    }

    public function withdraw($sum) {
        $this->amount -= $sum;

        return $sum;
    }
}
