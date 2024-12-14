<?php
$a = 6;
$b = 9;
if($a % 3 == 0 && $b % 3 == 0)
{
    echo $a + $b;
} elseif ($b != 0)
{
    echo $a / $b;
} else
{
    echo "Помилка вводу";
}