<?php

class Ad extends BaseModel
{
    public $title;
    public $userName;

    public function __construct(int $id, string $title, string $userName)
    {
        $this->id = $id;
        $this->title = $title;
        $this->userName = $userName;
    }

    public static function get()
    {
        $list = [];
        $db = Db::getInstance();
        $result = mysqli_query($db,'SELECT ad.id, ad.title, user.name as user_name
        FROM advertisement as ad
        INNER JOIN user ON ad.user_id = user.id');

        while($row = mysqli_fetch_assoc($result)){
            $list[] = new Ad($row['id'],$row['title'], $row['user_name']);
        }

        return $list;
    }
}
?>