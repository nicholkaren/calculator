<!DOCTYPE html>
<html>
<!-- Formulär med action till den fil där man har funktionen man vill köra. I detta
fall blir det samma fil. Metoden POST/post betyder att man skickar med values till
funktionen. De sparas i en variabel som heter $_POST som är en array. Den kan man 
alltid var_dump($_POST) om man vill veta vad man har skickat med i formuläret. 
name= key i arrayen. -->     


<div class="container" style= "text-align: center; padding-top: 20%; padding-bottom: 25%; background-color: lightpink;">    
    <h1 class="rubrik" style= "font-family: 'Arial'; color: white; text-transform: uppercase; letter-spacing: 2px;"> Lilla Kalkylatorn</h1>
    <form name="Calculator" action="" method="POST">
        <input type="text" name="numOne" value="<?php if(!empty($_POST)) {echo $numOne;}?>">
        <select name="operation">
                        <option value="addition">Plus</option>
                        <option value="subtraction">Minus</option>
                        <option value="multiplication">Gånger</option>
                        <option value="division">Delat med</option>
                        <option value="modulus">Modulus</option>
                        <option value="sqroot">Roten ur</option>
        </select>
        <input type="text" name="numTwo" value="<?php if(!empty($_POST)) {echo $numTwo;}?>">
        <button type="submit" style= "color: red;"> = </button> <?php if(!empty($_POST)){echo $result;} ?> <br><br>
        <button type="submit" name="clear"> Clear </button> <button type="submit" name="memory"> M+</button><br><br>


    </form>
</div>
</html>