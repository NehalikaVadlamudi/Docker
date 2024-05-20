<?php
require_once 'DatabaseConnection.php';
class SqlServer implements DatabaseConnection{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $dsn;

    public function __construct(string $host, string $dbname, string $username, string $password) {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
        $this->dsn = "mysql:host=$host;dbname=$dbname";
    }

    public function getDsn():string {
        return $this->dsn;
    }
}
?>
