<?php

namespace YuriyMartini\NovaPlaceField;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Laravel\Nova\Nova;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/field.php' => App::configPath('nova/fields/place.php'),
        ], ['config', 'nova-place-field', 'nova-place-field-config']);

        $this->mergeConfigFrom(__DIR__ . '/../config/field.php', 'nova.fields.place');

        Nova::serving(function () {
            $key = Config::get('nova.fields.place.api_key');
            // @phpstan-ignore-next-line
            Nova::remoteScript("https://maps.googleapis.com/maps/api/js?key=$key&libraries=places");
            Nova::script('yuriy-martini-place-field', __DIR__ . '/../dist/js/field.js');
        });
    }
}
