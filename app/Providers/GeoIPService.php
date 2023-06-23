<?php

namespace App\Services;

use Dotenv\Store\File\Reader as FileReader;
use GeoIp2\Database\Reader;
use Symfony\Component\CssSelector\Parser\Reader as ParserReader;

class GeoIPService
{
    protected $reader;

    public function __construct()
    {
        $databasePath = storage_path('app/GeoLite2-City.mmdb');
        $this->reader = new Reader($databasePath);
    }

    public function getCity($ip)
    {
        $record = $this->reader->city($ip);

        return [
            'ip' => $ip,
            'city' => $record->city->name,
            'country' => $record->country->name,
            'latitude' => $record->location->latitude,
            'longitude' => $record->location->longitude,
        ];
    }
}
