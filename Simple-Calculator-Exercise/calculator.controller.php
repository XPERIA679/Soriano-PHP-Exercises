<?php

class Calculator {
    private $num1;
    private $num2;
    private $operator;

    public function setNumbers($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function setOperator($operator) {
        $this->operator = $operator;
    }

    public function calculate() {
        switch ($this->operator) {
            case 'add':
                return $this->num1 + $this->num2;
            case 'subtract':
                return $this->num1 - $this->num2;
            case 'multiply':
                return $this->num1 * $this->num2;
            case 'divide':
                if ($this->num2 == 0) {
                    return 'Cannot divide by zero';
                }

                return $this->num1 / $this->num2;
            default:
                return 'Invalid operator';
        }
    }
}
