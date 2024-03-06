<?php use src\Controllers\CalculatorController; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
body{
  background: #ffece5;
  font-family: verdana;
}
.calculator{
  background: #fff;
  padding: 20px 40px;
  max-width: 300px;
  margin: 0 auto;
}
h2{
  color: #555;
}
label,input{
  display: block;
  margin: 18px 0;
}
label{
  color: #777;
}
input[type='text'],
input[type='email']{
  border: 1px solid #ddd;
  padding: 10px;
  border-radius: 10px;
  width: 100%;
}
textarea{
  border: 1px solid #ddd;
  padding: 10px;
  border-radius: 10px;
  width: 100%;
}
input[type='submit']{
  margin: 24px auto;
  font-size: 18px;
  background: coral;
  color: #fff;
  padding: 6px 16px;
  border: none;
  border-radius: 10px;
}
    </style>
</head>
<body>
<div class="calculator">
    <h2>PHP Calculator</h2>
    <form method="post" action="">
        <input type="number" name="num1" placeholder="Enter number 1" required>
        <input type="number" name="num2" placeholder="Enter number 2" required>

        <select name="operator">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>

        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php

        if (isset($_POST['calculate'])) {

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];

            $calculatorController = new CalculatorController();
            $result = $calculatorController->calculateResult($num1, $num2, $operator);

            echo '<p>Result: ' . $result . '</p>';
        }
        ?>
</div>
</body>
</html>