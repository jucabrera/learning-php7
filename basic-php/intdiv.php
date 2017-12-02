<?php
var_dump(5 / 2);
echo PHP_EOL;
echo floor(- 5 / 2); // -3 because round down -> -2.5 - 0.5 = -3
echo PHP_EOL;
echo (int) (- 5 / 2); //-2
echo PHP_EOL;
echo intdiv(-5,2); // New function that returns integer result of division