<?php
$hourlyRate = 10.00;
$hoursWorked = 12;
$rateMultiplier = 1.5;
$commissionRate = 0.10;
$grossSales = 25.00;
$bonus = 0;

$holidayRate = $hourlyRate * $rateMultiplier;
$holidayPay = $holidayRate * $hoursWorked;
$comission = $commissionRate * $grossSales;
$salary = $holidayPay + $comission;

if($grossSales>=1000) {
$bonus = 1000;
}
echo "Salary $" . $salary . "\n";
echo "Bonus +\$" . $commission . "\n";
echo "---------------------------\n";
echo "Total $" . ($salary + $comission) . "\n";
?>
