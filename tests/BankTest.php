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
}
