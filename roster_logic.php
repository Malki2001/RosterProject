<?php
//Get the year and month from URL or else get current year and month as the parameters
$year = isset($_GET["year"]) ? $_GET(["year"]) : date('Y');
$month = isset($_GET["month"]) ? $_GET(["month"]) : date('m');


$yearMonth = $year . '-' . $month;

//Get the number of days for the specific month
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

//Days array
$days = [];

//For loop for get each and every date
for ($i = 1; $i <= $daysInMonth; $i++) {
    $date = strtotime("$year-$month-$i");
    $days[] = [
        'day' => date('d', $date),
        'weekday' => date('D', $date),

    ];
}

//Department and staff array
$departments = [
    " Account" => ["Cillian Harvey", "Dylan Bradley"],
    "Admin" => ["Cameron Richards", "Hamish Lee", "Mateo Burns", "Reginald Lowe", "Charles Stewart"],

];
