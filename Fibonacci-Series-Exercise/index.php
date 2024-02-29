<?php

class FibonacciSeries
{
    private $n;
    private $num1 = 0;
    private $num2 = 1;

    public function __construct($n)
    {
        $this->n = $n;
    }

    public function fibonacci()
    {
        for ($i = 0; $i < $this->n; $i++) {
            echo $this->num1 . " ";

            $next = $this->num1 + $this->num2;
            $this->num1 = $this->num2;
            $this->num2 = $next;
        }
    }
}

$fibonacci = new FibonacciSeries(20);
$fibonacci->fibonacci();
?>
