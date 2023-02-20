<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class GradientService
{
    // ROMI (and = between number and number)
    public static $romiLessThanMinus100 = '#E4B4B5';
    public static $romiMinus99And0 = '#F3BFAF';
    public static $romi1And100 = '#F1DAB3';
    public static $romi101And200 = '#EFE9AE';
    public static $romi201And300 = '#EBF3BE';
    public static $romi301And400 = '#DAF8C5';
    public static $romi401And500 = '#CBF8C5';
    public static $romi501And600 = '#C1F1BB';
    public static $romi601And700 = '#AFE8A7';
    public static $romi701And800 = '#9FDD96';
    public static $romi801And900 = '#92D190';
    public static $romiMoreThan901 = '#89C78B';

    // CPS (and = between number and number)
    public static $cpsLessThan200 = '#9FDD95';
    public static $cps201And400 = '#AFE8A6';
    public static $cps401And600 = '#DAF8C5';
    public static $cps601And800 = '#EEF5BF';
    public static $cps801And1000 = '#F1DAB3';
    public static $cps1001And1200 = '#E4B4B5';

    // CRS (and = between number and number)
    public static $crsLessThan05 = '#E4B4B5';
    public static $crs06And1 = '#F1DAB3';
    public static $crs1с1And1с5 = '#C1F1BA';
    public static $crs1с6And2 = '#9FDD96';
    public static $crsMoreThan2 = '#89C78B';

    // Weekend
    public static $weekend = '#D9E4F8';

    public static function ROMI($number)
    {
        switch (true) {
            case (is_null($number)):
                return '#F1F5F9';

            case ($number < -100):
                return self::$romiLessThanMinus100;

            case ($number > -100 && $number < 0):
                return self::$romiMinus99And0;

            case ($number > 1 && $number < 100):
                return self::$romi1And100;

            case ($number > 100 && $number < 200):
                return self::$romi101And200;

            case ($number > 200 && $number < 300):
                return self::$romi201And300;

            case ($number > 300 && $number < 400):
                return self::$romi301And400;

            case ($number > 400 && $number < 500):
                return self::$romi401And500;

            case ($number > 500 && $number < 600):
                return self::$romi501And600;

            case ($number > 600 && $number < 700):
                return self::$romi601And700;

            case ($number > 700 && $number < 800):
                return self::$romi701And800;

            case ($number > 800 && $number < 900):
                return self::$romi801And900;

            case ($number > 900):
                return self::$romiMoreThan901;
        }
    }

    public static function CPS($number)
    {
        switch (true) {
            case (is_null($number)):
                return '#F1F5F9';

            case ($number < 200):
                return self::$cpsLessThan200;

            case ($number > 200 && $number < 400):
                return self::$cps201And400;

            case ($number > 400 && $number < 600):
                return self::$cps401And600;

            case ($number > 600 && $number < 800):
                return self::$cps601And800;

            case ($number > 800 && $number < 1000):
                return self::$cps801And1000;

            case ($number > 1000 && $number < 1200):
                return self::$cps1001And1200;
        }
    }

    public static function CRS($number)
    {
        switch (true) {
            case (is_null($number)):
                return '#F1F5F9';

            case ($number < 0.5):
                return self::$crsLessThan05;

            case ($number > 0.5 && $number < 1):
                return self::$crs06And1;

            case ($number > 1 && $number < 1.5):
                return self::$crs1с1And1с5;

            case ($number > 1.5 && $number < 2):
                return self::$crs1с6And2;

            case ($number > 2):
                return self::$crsMoreThan2;
        }
    }

    public static function weekend($date)
    {
        if (Carbon::create($date)->isWeekend()) {
            return self::$weekend;
        }
    }
}
