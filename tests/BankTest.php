<?php
/**
 * Class BankTest
 */
class BankTest extends PHPUnit_Framework_TestCase
{
    public function testInitBank()
    {
        $a = new Bank(5);
        $this->assertEquals(5, $a->getamount());
    }

    public function testIsValid()
    {
        $a = new Bank(100);
        $a->withdraw(95);
        $a->withdraw(10);
        $this->assertTrue($a->isvalid());
    }

    public function testAddAmount()
    {
        $a = new Bank();
        $a->add(100);
        $this->assertEquals(100, $a->getamount());
    }

    public function testWithdrawAmount()
    {
        $a = new Bank();
        $a->add(100);
        $a->withdraw(50);
        $this->assertEquals(50, $a->getamount());
    }
}
