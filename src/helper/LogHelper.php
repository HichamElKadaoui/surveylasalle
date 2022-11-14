<?php

// File: app/Helpers/LogHelper.php
namespace src\helper;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

/**
 * Adds the request URL and session ID to the context of Monolog messages.
 * @package App\Helpers

 */

class LogProcessor {

    public function __invoke(array $record): array {

        $record['context']['request_url'] = Request::fullUrl();

        $record['context']['session_id'] = Session::getId();

        return $record;

    }

}