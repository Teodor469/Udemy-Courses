<?php

declare(strict_types = 1);

function getSum(int $a, int $b): int {
    return $a + $b;
}

echo getSum(1, 1);

function greeting(string $name): string {
    return 'Hello ' . $name;
}

echo greeting('John');

?>