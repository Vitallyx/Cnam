<?php

class DbConnect
{
    /** @var string $host Database server adress */
    private string $host;

    /** @var int $port Database server port */
    private int $port;

    /** @var string $dbname Database name */
    private string $dbname;

    /** @var string $username Dataname username */
    private string $username;

    /** @var string $password Database password */
    private string $password;

    /**
     *  CONSTRUCTOR 
     */
    public function __construct()
    {
    }
}
