<?php

function translateMonth($month) {
    switch ($month) {
        case 'January':
            return 'Janeiro';
        break;
        case 'February':
            return 'Fevereiro';
        break;
        case 'March':
            return 'Março';
        break;
        case 'April':
            return 'Abril';
        break;
        case 'May':
            return 'Maio';
        break;
        case 'June':
            return 'Junho';
        break;
        case 'July':
            return 'Julho';
        break;
        case 'August':
            return 'Agosto';
        break;
        case 'September':
            return 'Setembro';
        break;
        case 'October':
            return 'Outubro';
        break;
        case 'November':
            return 'Novembro';
        break;
        case 'December':
            return 'Dezembro';
        break;
    }
}

function prevMonth($time)
{
    
    return date('Y-m-d', strtotime("-1 month", $time));
}

function nextMonth($time)
{
    return date('Y-m-d', strtotime("+1 month", $time));
}

function get($url)
{
    return stripslashes(htmlentities($_GET[$url]));
}

function getMonthTime()
{
    $monthTime = strtotime(date("Y-m-1"));

    if (isset($_GET['month'])) {
        extract(date_parse_from_format('Y-m-d', get("month")));

        $monthTime = strtotime("{$year}-{$month}-1");
    }

    return $monthTime;
}