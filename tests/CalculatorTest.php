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
    
    
    public function testDivisionByZeroDoesNotCompute ()
    {
        /*Arrange*/
        
        $calculator = new Calculator;
        
        /*Assert*/
        $this->expectException(\InvalidArgumentException::class);
        
        /*Act*/
        $sum = $calculator->division(3, 0);
        
        
    }
}