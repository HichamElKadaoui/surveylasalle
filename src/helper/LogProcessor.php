<?php

namespace src\helper;
use Monolog\Logger;

class LogHelper {

    /**
    •@param Logger $logger
     */

    public function __invoke($logger) {
        foreach ($logger->getHandlers() as $handler) {
            $handler->pushProcessor(new LogProcessor());
        }
    }
}