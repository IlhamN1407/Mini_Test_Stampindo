<?php

function primeNumber($number)
{
    if ($number === 1) return $number;
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return true;
        }
    }
    return false;
}
function printfoobar()
{
    for ($i = 100; $i >= 1; $i--) {
        if (primeNumber($i)) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                echo "FooBar, ";
            } else if ($i % 5 === 0) {
                echo "Bar, ";
            } else if ($i % 3 === 0) {
                echo "Foo, ";
            } else {
                echo $i . ", ";
            }
        }
    }
}

// if (primeNumber($i)) {
// }
printfoobar();
