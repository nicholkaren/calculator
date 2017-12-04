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
    
    public function division($value) 
    {
        if($value ==0){
            throw new \InvalidArgumentException;    
        }
        $this->sum = $this->sum / $value;
    }
    
    public function subtraction(array $values)
    {
        foreach ($values as $value)
        {
            $this->sum -=$value;
        }
        
        return $this->sum;
    }

    public function multiplication(array $values)
    {
        foreach ($values as $value)
        {
            $this->sum *=$value;
        }
        
        return $this->sum;
    }

   public function modulus(array $values)
    {        
        foreach ($values as $value) 
        {
            $this->sum %= $value;
        }
        
        return $this->sum;
    }



    }
?>