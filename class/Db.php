<?php


class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = include __DIR__ . '/../config/db.cfg';

        $this->dbh = new PDO($config['dsn'],
            $config['username'],
            $config['pass']);
    }

    public function execute(string $sql, array $data = []) :bool
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    public function query(string $sql, array $data = [], string $className = null)
    {
        $sth = $this->dbh->prepare($sql);
        if($sth->execute($data)){
            return $sth->fetchAll(PDO::FETCH_CLASS, $className);
        } else {
            return false;
        }
    }

    public function getLastInsertedId()
    {
        return $this->dbh->lastInsertId();
    }
}