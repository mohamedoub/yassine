<?php


class users
{
    protected static $tableName = "tbl_users";
    private $user_id;
    private $user_type;
    private $name;
    private $email;
    private $password;
    private $status;
    private $imageName;

    public function __construct()
    {

    }

    public function addUser($query, $params)
    {

        $stmt = new database();
        $stmt->requete($query, $params);
    }

    public function getAllUsers()
    {
        $db = new database();
        $tablename = static::$tableName;
        return $db->requete("select * from $tablename")->fetchAll();
    }
}