<?php

/**
 * Default phone format
 * @param int $phone
 * @return string
 */
function phone($phone = 0)
{
    return preg_replace('/(\d{1})(\d{3})(\d{3})(\d{2})(\d{2})/', '+$1 ($2) $3-$4-$5', $phone);
}

/**
 * Default price format
 * @param int $price
 * @return string
 */
function price($price = 0)
{
    return number_format($price, 0, ' ', ' ');
}

/**
 * Default price format
 * @param int $price
 * @return string
 */
function crs($number = 0)
{
    if ($number) {
        return number_format($number, 2, '.');
    }

    return null;
}
