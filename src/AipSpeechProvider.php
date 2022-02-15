<?php

namespace Guandeng\Aipspeech;

use Illuminate\Support\ServiceProvider;

class AipSpeechProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/aipspeech.php' => config_path('aipspeech.php'), // 发布配置文件到 laravel 的config 下
        ]);
    }

    public function register()
    {

        // $this->app->singleton('aipspeech', function () {
        // });
    }
}
