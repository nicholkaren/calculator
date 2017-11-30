<?php

class Calculator
{
    public function addition(array $values)
    {
        $sum = 0;
        
        foreach ($values as $value) {
            $sum += $value;
        }
        
        return $sum;
    }
}