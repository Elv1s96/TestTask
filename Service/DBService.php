<?php

namespace Service;

final class DBService
{
    private static $instance;

    private function __construct(){}

    /**
     * @return \mysqli
     */
    public static function getInstance()
    {
        return self::$instance ?? new \mysqli("127.0.0.1", 'root', '', 'testtask');
    }
}