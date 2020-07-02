<?php

namespace App;

use App\Singleton;
use App\Config;

class Db
{
    use Singleton;

    protected \PDO $dbh;

    protected function __construct()
    {
        $config = Config::instance();

        $this->dbh = new \PDO(
            'pgsql:host=' . $config->data['db']['host'] . ';dbname=' . $config->data['db']['dbname'],
            $config->data['db']['user'], $config->data['db']['password']
        );
    }

    public function query($sql, $class, $params = []): array
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function execute($sql, $params = []): bool
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    public function lastId()
    {
        return $this->dbh->lastInsertId();
    }
}