<?php
require 'classes/Calculator1.php';
require 'classes/OperatorInterface.php';
require 'classes/Adder.php';
require 'classes/Subtractor.php';

 $num1 = $_POST['number1'];
 $num2 = $_POST['number2'];

$c = new Calculator;

$c->setOperation(new Adder);
$c->calculate($num1, $num2);

$c->setOperation(new Subtractor);
$c->calculate($num1, $num2);

echo $c->getResult();

?>

 <form method="post" action="index.php">
		        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation">
		        	<option value="plus">Plus</option>
		            <option value="minus">Minus</option>
		            <option value="times">Times</option>
		            <option value="divided by">Divided By</option>
		        </select>
		        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>