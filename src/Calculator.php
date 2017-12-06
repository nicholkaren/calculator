<?php
    // Deklarerar variabler. $_POST är en array. 
    //För att få ut siffran på t ex numOne -> $_POST['numOne']
    if (!empty($_POST)){
    
        $numOne = $_POST['numOne'];
        $numTwo = $_POST['numTwo'];


        $values = array();

        array_push($values, $numOne, $numTwo);

    
        // Nyar upp en instans av klassen Calculator för att kunna kalla på funktionerna som vi har skapat i
        // klassen. 
        $cal = new Calculator();


        // Här kollar vi nu på key (name i select i form) i $_POST på vilken operation som ska köras. 
        // Dina options i selectmenyn har ett varsitt value, så vi kan kolla om det överensstämmer med
        // ['operation']. Om $_POST innehåller addition så körs funktionen addition. Och det gör man genom
        // att kalla på den via $cal->addition(); och $cal är den nya instansen/versionen av calculatorn.

        if($_POST['operation']=="addition")
        {   
            $result = $cal->addition($values);
        } 

        if($_POST['operation']=="subtraction")
        {
           $result = $cal->subtraction($values);
        } 

        if($_POST['operation']=="division")
        {
           $result = $cal->division($values);
        } 

        if($_POST['operation']=="multiplication")
        {
           $result = $cal->multiplication($values);
        } 

        if($_POST['operation']=="modulus")
        {
           $result = $cal->modulus($values);
        } 

        if($_POST['operation']=="sqroot")
        {
            $result = $cal->sqroot($values);
        }

        if(isset($_POST['clear'])){
            $numOne = null;
            $numTwo = null;
            $result = null;
        }

        if(isset($_POST['memory'])){
            $numOne = $result;
            $numTwo = null;
            $result = null;
        }

        if(isset($_POST['minusmemory'])){
            $numOne = $numOne;
            $numTwo = null;
            $result = null;
        }
}

    // Functions börjar här
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

    public function subtraction(array $values)
    {
        // i arrayen values finns 2 tal. [0] är första talet. [1] är andra talet.
        $sum = $values[0];

        return $sum - $values[1];
    }

    public function multiplication(array $values)
    {
        $sum = $values[0];

        return $sum * $values[1];
    }

    public function division($values) 
    {
        $sum = $values[0];

        return $sum / $values[1];
    }

    public function modulus(array $values)
    {   
        $sum = $values[0];

        return $sum % $values[1];
    }

    public function sqroot(array $values)
    {   
        $sum = $values[0];

        return sqrt($_POST['numTwo']);
    }
}