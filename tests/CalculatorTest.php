<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testSimpleAddition()
    {
        /* Arrange */
        $calculator = new Calculator;
        
        
        /* Act */
        $sum = $calculator->addition([2, 3, 5]);
        
        
        /* Assert */
        $this->assertEquals(10, $sum);
    }
}