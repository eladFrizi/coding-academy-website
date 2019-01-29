<?php
    $datesJson =  file_get_contents('dates.json');
    $dates  = json_decode($datesJson);
    $nextOpenEveningIsoFormat = $dates->nextOpenEvening;


    
    // $fmt =  new IntlDateFormatter('he',$nextOpenEveningIsoFormat);
     $fmt = new IntlDateFormatter(
         'he',
        IntlDateFormatter::FULL,
        IntlDateFormatter::FULL,
        'Europe/Berlin',
         IntlDateFormatter::GREGORIAN
        );
    
    $lastMonth = strtotime($nextOpenEveningIsoFormat);
    
    $showLastMonth =  $fmt->format($lastMonth);
    echo $showLastMonth;



    // setlocale(LC_TIME, 'he');
    // echo strftime('%A %e %B');

    // echo strftime("d M, Y",strtotime(date($nextOpenEveningIsoFormat)));  
?>