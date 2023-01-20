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
