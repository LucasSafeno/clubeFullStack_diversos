<?php
require "../../vendor/autoload.php";

date_default_timezone_set("America/Sao_Paulo");

//? Number Format - currency, data, decimal, porcentagem

//$numberFormatter = new NumberFormatter("pt_BR", NumberFormatter::CURRENCY);
//$numberFormatter = new NumberFormatter("pt_BR", NumberFormatter::DECIMAL);
$numberFormatter = new NumberFormatter("pt_BR", NumberFormatter::PERCENT);


$numberToFormat = 12.987;
$decimal = strlen(substr(strrchr((string) $numberToFormat, "."), 1));

$numberFormatter->setAttribute(NumberFormatter::FRACTION_DIGITS, 2);

dd($numberFormatter->format(12.98 / 100));


?>