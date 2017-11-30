<?php

class Calculator
{
    
    private $sum = 0; 
    
    public function getSum()
    {
        return $this->sum;
    }
    
    public function addition(array $values)
    {        
        foreach ($values as $value) {
            $this->sum += $value;
        }
        
        return $this->sum;
    }
    
    public function division($value1, $value2) 
    {
        if($value2 ==0){
            throw new \InvalidArgumentException;    
        }
        return $value1 / $value2;
    }

}