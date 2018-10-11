<?php
/**
 * Created by PhpStorm.
 * User: Egor
 * Date: 11.10.2018
 * Time: 15:29
 */

class RemoveModel
{
    private $id;
    private $name;
    private $content;
    public function __construct($name,$content,$id)
    {
        $this->name=$name;
        $this->content=$content;
        $this->id=$id;
    }
    public function remove($id)
    {
        if(!$this->id) {
            return false;
        }
        return \Service\DBService::getInstance()->query("DELETE FROM `news` WHERE `id` = $id LIMIT 1");
    }
    public static function findById($id)
    {
        $db = new mysqli("127.0.0.1", "root", "", "testtask");
        $res = $db->query("SELECT * FROM `news` WHERE `id` = $id LIMIT 1")->fetch_assoc();
        return new self($res["name"],$res["content"],$res["id"]);

    }

}
