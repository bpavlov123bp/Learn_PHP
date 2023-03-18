<?php
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
echo '<h1 align="center">Bob\'s Auto Part</h1>';
echo '<p align="center">Your order processed at ';
echo date('d-m-Y');
echo "</p>";
echo "Your order is as follows:<br>";
echo "$tireqty tires<br>";
echo "$oilqty bottles of oil<br>";
echo "$sparkqty spark plugs<br>";
define("TIREPRICE", 100);
define("OILPRICE", 20);
define("SPARKPRICE", 10);
$totalAmount = 0.0;
$totalAmount = ($tireqty * TIREPRICE) + ($oilqty * OILPRICE) + ($sparkqty * SPARKPRICE);
echo "The total amont of your order: " . number_format($totalAmount, 2) . " lv.<br>";
$tax = 0.20;
echo "Tax: $tax<br>";
$totalAmont = $totalAmont * (1 + $tax);
echo "Total amount with tax: " . number_format($totalAmount, 2) . "lv.<br>";
?>