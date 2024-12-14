<?php
$month = 4;
$days = 0;

if($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12)
{
    $days = 31;
}elseif ($month == 4 || $month == 6 || $month == 9 || $month == 11)
{
    $days = 30;
} else
{
    $days = 28;
}

echo "<p>Month = $month</p>
<p>Days = $days</p>";