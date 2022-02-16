<?php

namespace Guandeng\Aipspeech;

use Illuminate\Support\ServiceProvider;

class AipSpeechProvider extends ServiceProvider
{
    public function boot()
    {
        $configPath = __DIR__ . '/../config/aipspeech.php';
        if (function_exists('config_path')) {
            $publishPath = config_path('aipspeech.php');
        } else {
            $publishPath = base_path('config/aipspeech.php');
        }
        $this->publishes([$configPath => $publishPath], 'config');
    }

    public function register()
    {

        // $this->app->singleton('aipspeech', function () {
        // });
    }
}
