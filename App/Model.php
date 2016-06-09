<?php

namespace App;


abstract class Model
{

    const TABLE = '';

    public static function findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }

    public static function findById($id)
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE . ' WHERE id = :id',
            static::class, [':id' => $id])[0] ?: false;
    }


    public static function findLastRecord($lim)
    {
        $db = new Db();
        return $db->query(
            sprintf('SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT %u', $lim),
            static::class) ?: false;
    }
/*'SELECT * FROM ' . static::TABLE . ' ORDER BY '. static::Pk .' DESC  LIMIT %u', $limit

    public static function findLastRecords($limit)
    {
        $db = new Db();
        return $db->query(
            sprintf('SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT %u', $limit),
            static::class) ?: false;
    }*/

}