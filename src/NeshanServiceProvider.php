<?php

namespace EhsanCoder\NeshanLaravel;

use Illuminate\Support\ServiceProvider;

class NeshanServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('Neshan',function (){
            $apiKey = env('NESHAN_API_KEY', '');
            $url    = env('NESHAN_API_URL', 'https://api.neshan.org/');
            return new NeshanAPI($apiKey,$url);
        });
    }
}