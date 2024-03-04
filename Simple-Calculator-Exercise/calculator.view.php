<?php require "calculator.controller.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .calculator {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input, button {
            margin: 5px;
            padding: 10px;
            font-size: 16px;
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
        $calculator = new Calculator();
        $calculator->setNumbers($_POST['num1'], $_POST['num2']);
        $calculator->setOperator($_POST['operator']);
        $result = $calculator->calculate();

        echo '<p>Result: ' . $result . '</p>';
    }
    ?>
</div>
</body>
</html>