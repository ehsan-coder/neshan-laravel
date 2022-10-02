<?php

namespace EhsanCoder\NeshanLaravel;

use Illuminate\Support\Facades\Http;

class NeshanAPI
{
    const DISTANCE_MATRIX_MOTORCYCLE_TYPE = 'motorcycle';
    const DISTANCE_MATRIX_CAR_TYPE        = 'car';
    protected $apiKey;
    private $url;

    public function __construct($apiKey,$url) {
        if (is_null($apiKey)) {
            die('apiKey has not been set');
            exit;
        }
        $this->apiKey = $apiKey;
        $this->url    = $url;
    }

    /**
     * @param  string  $address
     * @param  int  $timeout
     *
     * @return array|mixed
     */
    public function geocoding(string $address, int $timeout = 5)
    {
        return (Http::timeout($timeout)->withHeaders(['Api-Key' => $this->apiKey])
            ->get($this->url.'v4/geocoding', [
                "address" => $address,
            ]))->json();
    }

    /**
     * @param  string  $latitude
     * @param  string  $longitude
     * @param  int  $timeout
     *
     * @return string
     */
    public function reverseGeocoding(string $latitude, string $longitude, int $timeout = 5)
    {
        return (Http::timeout($timeout)->withHeaders(['Api-Key' => $this->apiKey])
            ->get($this->url . 'v5/reverse', [
            "lat" => $latitude,
            "lng" => $longitude
        ]))->json();
    }

    /**
     * @param  string  $term
     * @param  string  $latitude
     * @param  string  $longitude
     * @param  int  $timeout
     *
     * @return array|mixed
     */
    public function search(string $term, string $latitude, string $longitude, int $timeout = 5)
    {
        return (Http::timeout($timeout)->withHeaders(['Api-Key' => $this->apiKey])
            ->get($this->url.'v1/search', [
                "term" => $term,
                "lat"  => $latitude,
                "lng"  => $longitude
            ]))->json();
    }

    public function distanceMatrix(string $origins, string $destinations, string $type = 'car', int $timeout = 5)
    {
        return (Http::timeout($timeout)->withHeaders(['Api-Key' => $this->apiKey])
            ->get($this->url.'v1/distance-matrix', [
                "type"          => $type,
                "origins"       => $origins,
                "destinations"  => $destinations
            ]))->json();
    }

    /**
     * @param  string  $path
     * @param  int  $timeout
     *
     * @return array|mixed
     */
    public function mapMatching(string $path, int $timeout = 5)
    {
        return (Http::timeout($timeout)->withHeaders(['Api-Key' => $this->apiKey])
            ->get($this->url.'v1/map-matching', [
                "path" => $path,
            ]))->json();
    }
}