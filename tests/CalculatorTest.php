<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testSimpleAddition()
    {
        /* Arrange */
        $calculator = new Calculator;
        
        
        /* Act */
        $calculator->addition([2, 3, 5]);
        
        
        /* Assert */
        $this->assertEquals(10, $calculator->getSum());
    }
    
    
    public function testDivisionByZeroDoesNotCompute ()
    {
        /*Arrange*/
        $calculator = new Calculator;
        
        /*Assert*/
        $this->expectException(\InvalidArgumentException::class);
        
        /*Act*/
        $calculator->division(0);
        
        
    }
    public function testDivision()
    {
       /*Arrange*/
        $calculator = new Calculator;
        
        /* Act */
        $calculator->addition([5]);
        $calculator->division(2);
        
        /* Assert */
        $this->assertEquals(2.5, $calculator->getSum());
        
    }
    
    public function testMultipleOperationsWork(){
        /* Arrange */
        $calculator = new Calculator;
        
        /* Act */
        $calculator->addition([10, 2]);
        $calculator->division(2);
        
        /* Assert */
        $this->assertEquals(6, $calculator->getSum());
    }
}