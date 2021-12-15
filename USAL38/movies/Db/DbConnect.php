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
     * @param string $host Database Hostname
     * @param int $port Database port
     * @param string $dbname Database name
     * @param string $username Database username
     * @param string $password Database password
     */
    public function __construct(string $host, int $port, string $dbname, string $username, string $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        $dsn = "mysql:$this->host=$host;$this->port=$port;$this->dbname=$dbname;charset=utf8";

        $connection = new PDO($dsn, $username, $password);
    }
} // End of class
