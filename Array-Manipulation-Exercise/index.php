<?php

class SortNumbers {

    private $numbers;

    public function __construct($numbers) {
        $this->numbers = $numbers;
    }

    public function ascendingSort() {
        sort($this->numbers);
    }

    public function descendingSort() {
        rsort($this->numbers);
    }

    public function displaySorted() {
        return $this->numbers;
    }
}

$numberArray = [3, 1, 9, 5, 7, 2, 8];

echo "Array Numbers to be Sorted: " . join(", ", $numberArray) . '<br><br>';

$sorting = new SortNumbers($numberArray);

$sorting->ascendingSort();
$sortedAscending = $sorting->displaySorted();
echo "Sort Numbers in Ascending Order: " . join(", ", $sortedAscending) . '<br><br>';

$sorting->descendingSort();
$sortedDescending = $sorting->displaySorted();
echo "Sort Numbers in Descending Order: " . join(", ", $sortedDescending) . '<br><br>';