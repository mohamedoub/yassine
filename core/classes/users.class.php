<?php


class users
{
    protected static $tableName = "tbl_users";
    private $user_id = 0;
    private $user_type;
    private $name;
    private $email;
    private $password;
    private $status;
    private $imageName;


    function __construct()
    {
        $argv = func_get_args();
        switch (func_num_args()) {
            case 1 :
                self::__construct1();
                break;
            case 2 :
                self::__construct2($argv[0], $argv[1], $argv[2], $argv[3], $argv[4], $argv[5]);
                break;

        }

    }

    function __construct1()
    {

    }

    function __construct2($user_type, $name, $email, $password, $status, $imageName)
    {
        $this->user_type = $user_type;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->status = $status;
        $this->imageName = $imageName;
    }

//    public function __construct($user_type,$name,$email,$password,$status,$imageName) {
//        $this->user_type = $user_type;
//        $this->name = $name;
//        $this->email = $email;
//        $this->password = $password;
//        $this->status = $status;
//        $this->imageName = $imageName;
//    }

    public function addUser()
    {
        $param = ["$this->user_id", "$this->user_type", "$this->name", "$this->email", "$this->password", "$this->status", "$this->imageName"];
        if ($param[1] !== '') {
            $db = new database();
            $sql = "INSERT INTO " . self::$tableName . " VALUES (?,?,?,?,?,?,?)";
            $db->requete($sql, $param);
            var_dump($param, $sql);
        } else {
            echo "dawi khawi";
        }

    }

    public function getAllUsers()
    {
        $db = new database();
        return $db->requete("select * from " . self::$tableName)->fetchAll();
    }
}