<?php

date_default_timezone_set("Asia/Colombo");
	date_default_timezone_get();
	$mydate = getdate(date("U"));
	$date2 = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
        $date3 =date("Y-m-d");
        $date4 = "$mydate[weekday]";

?>