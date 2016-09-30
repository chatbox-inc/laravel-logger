<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2016/06/13
 * Time: 7:06
 */

namespace Chatbox\Lumen\Providers;

use Chatbox\Lumen\Logger\Handlers\StdoutHandler;
use Illuminate\Support\ServiceProvider;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

class StdoutLoggerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $app = $this->app;
        $app->extend(LoggerInterface::class,function(Logger $logger){
            $handler = new StdoutHandler(env("APP_LOGLEVEL",Logger::DEBUG));
            $logger->pushHandler($handler);
            return $logger;
        });
    }
}