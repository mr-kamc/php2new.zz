<?php

namespace App;


class Db
{

    protected $dbh;

    function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test;', 'root', '');
    }

    public function execute($sql, $options = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($options);
        return $res;
    }

    public function query($sql, $class, $options = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($options);
        if (false !== $res){
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        else{
            return [];
        }
    }

}