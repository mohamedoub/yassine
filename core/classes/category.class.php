<?php

class category
{
    protected static $tableName = "tbl_category";
    private $cid;
    private $category_name;
    private $category_image;

    public function __construct()
    {

    }

    public function getAllCategory()
    {
        $db = new database();
        $tablename = static::$tableName;
        return $db->requete("select * from " . static::$tableName . "")->fetchAll();

    }
}