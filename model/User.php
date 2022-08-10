<?php

class User extends BaseModel
{
    public $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public static function get()
    {
        $list = [];
        $db = Db::getInstance();
        $result = mysqli_query($db,'SELECT * FROM user');

        while($row = mysqli_fetch_assoc($result)){
            $list[] = new User($row['id'],$row['name']);
        }

        return $list;
    }
}
?>