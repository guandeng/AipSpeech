<?php

namespace Guandeng\Aipspeech;

use Illuminate\Support\ServiceProvider;

class AipSpeechProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->setupConfig();
    }

    public function setupConfig()
    {
        $source = realpath(__DIR__.'/config/aipspeech.php');
        $this->mergeConfigFrom($source, 'aipspeech');
    }
}
