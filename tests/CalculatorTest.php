<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testSimpleAddition()
    {
        /* Arrange */
        $calculator = new Calculator;
        
        
        /* Act */
        $sum = $calculator->addition(2, 3);
        
        
        /* Assert */
        $this->assertEquals(5, $sum);
    }
}