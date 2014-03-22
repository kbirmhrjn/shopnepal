<?php

return array(

    'debug' => true,
    /*
    |--------------------------------------------------------------------------
    | Append environment service providers
    |--------------------------------------------------------------------------
    */

    'providers' => append_config(array(

        'Clockwork\Support\Laravel\ClockworkServiceProvider',

    )),

    /*
    |--------------------------------------------------------------------------
    |  Append environment aliases
    |--------------------------------------------------------------------------
    */

    'aliases' => append_config(array(

        'Clockwork'       => 'Clockwork\Support\Laravel\Facade',

    )),

);
