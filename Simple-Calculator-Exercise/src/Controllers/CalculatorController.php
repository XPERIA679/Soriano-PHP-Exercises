<?php

namespace src\Controllers;

use src\Models\CalculatorModel;

class CalculatorController
{
    public function calculateResult($num1, $num2, $operator): int|string
    {
        $calculator = new CalculatorModel();
        $calculator->setNumbers($num1, $num2);
        $calculator->setOperator($operator);
        return $calculator->calculate();
    }
}
