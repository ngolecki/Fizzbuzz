<?php
class Bank
{
    private $amount;

    public function __construct($sum = 0)
    {
        $this->amount = $sum;
    }

    public function isvalid() {
        return $this->amount >= 0;
    }

    public function getamount() {
        return $this->amount;
    }

    public function add($sum) {
        $this->amount += $sum;

        return $this->amount;
    }

    public function withdraw($sum) {
        if ($this->amount >= $sum) {
            $this->amount -= $sum;
        } else {
            $sum = $this->amount;
            $this->amount -= $sum;
        }

        return $sum;
    }
}
