<?php
/*
 *  Last Modified: 03/15/23, 11:18 PM
 *  Copyright (c) 2023
 *  -created by Ariful Islam
 *  -All Rights Preserved By
 *  -If you have any query then knock me at
 *  arif98741@gmail.com
 *  See my profile @ https://github.com/arif98741
 */

namespace Xenon\ActivityLog;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class ActivityLogProvider extends ServiceProvider
{

    public function register()
    {

    }


    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/activitylog.php' => config_path('activity-log.php'),
          //  __DIR__ . '/Stubs/SslCommerzController.stub' => app_path('../app/Http/Controllers/SslCommerzController.php'),
        ]);
    }

}
