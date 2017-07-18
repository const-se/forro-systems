<?php

if (!defined('FORRO_SYSTEMS')) {
    header('HTTP/1.0 404 Not Found');
    exit;
}

function getUrlPhone($phone)
{
    return '+7' . mb_substr(preg_replace('/[^0-9]/', '', $phone), -10);
}

function getStockDate()
{
    $months = ['нулября', 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
    $date = strtotime('now + 2 day');

    return date('d', $date) . ' ' . $months[intval(date('m', $date))];
}

function getStockTimerDate()
{
    return date('/m/d/Y 14:00:00', strtotime('now + 2 day'));
}