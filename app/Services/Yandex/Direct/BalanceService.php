<?php

namespace App\Services\Yandex\Direct;

use Illuminate\Support\Facades\Http;

class BalanceService
{
    protected static $apiUrl = 'https://api.direct.yandex.ru/live/v4/json';

    public static function get($directKey)
    {
        $http = Http::post(self::$apiUrl, [
            'method' => 'AccountManagement',
            'token' => env($directKey),
            'param' => ['Action' => 'Get', 'SelectionCriteria' => ["AccountIDS" => []]]

        ])->json();

        return $http['data']['Accounts'][0]['Amount'] ?? null;
    }
}
