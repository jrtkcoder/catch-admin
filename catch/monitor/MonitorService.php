<?php
// +----------------------------------------------------------------------
// | CatchAdmin [Just Like ～ ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017~{$year} http://catchadmin.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( https://github.com/yanwenwu/catch-admin/blob/master/LICENSE.txt )
// +----------------------------------------------------------------------
// | Author: JaguarJack [ njphper@gmail.com ]
// +----------------------------------------------------------------------

namespace catchAdmin\monitor;

use catcher\ModuleService;

class MonitorService extends ModuleService
{
    public function register()
    {
        parent::register(); // TODO: Change the autogenerated stub

        $this->registerConfig();
    }

    protected function registerConfig()
    {
        $this->app->config->set(array_merge($this->app->config->get('catch'),
            require __DIR__ . DIRECTORY_SEPARATOR . 'config.php'), 'catch');
    }
    public function loadRouteFrom()
    {
        // TODO: Implement loadRouteFrom() method.
        return __DIR__ . DIRECTORY_SEPARATOR . 'route.php';
    }

    public function loadCommands()
    {
        return [__NAMESPACE__, __DIR__ . DIRECTORY_SEPARATOR . 'command'];
    }

}
