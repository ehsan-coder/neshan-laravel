<?php

namespace EhsanCoder\NeshanLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * Class NeshanFacade
 *
 * @package EhsanCoder\NeshanLaravel
 *
 * @method static geocoding (string $address, int $timeout = 5)
 * @method static reverseGeocoding (string $latitude, string $longitude, int $timeout = 5)
 * @method static search (string $term, string $latitude, string $longitude, int $timeout = 5)
 * @method static distanceMatrix (string $origins, string $destinations, string $type = 'car', int $timeout = 5)
 * @method static mapMatching (string $path, int $timeout = 5)
 */
class NeshanFacade extends Facade
{
    protected static function getFacadeAccessor ()
    {

        return 'Neshan';
    }
}