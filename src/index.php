<?php
function getFibonacci(int $limit)
{
    $i = 0;
    yield $i;
    $k = 1;

    while ($k < $limit) {
        yield $k;
        $temp = $k;
        $k = $i + $k;
        $i = $temp;
    }

}

$limit = 15;
$generator = getFibonacci($limit);
foreach ($generator as $value) {
    echo $value . PHP_EOL;
}