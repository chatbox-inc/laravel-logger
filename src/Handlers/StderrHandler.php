<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2016/06/03
 * Time: 1:38
 */

namespace Chatbox\Lumen\Logger\Handlers;


use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class StderrHandler extends StreamHandler
{
    public function __construct($level = Logger::DEBUG, $bubble = true, $filePermission = null, $useLocking = false)
    {
        $stream = "php://stderr";
        parent::__construct($stream, $level, $bubble, $filePermission, $useLocking);
    }


}