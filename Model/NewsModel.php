<?php
/**
 * Created by PhpStorm.
 * User: Egor
 * Date: 11.10.2018
 * Time: 12:39
 */

class NewsModel
{
    private $id;
    private $name;
    private $content;

    public function __construct($name, $content, $id = null)
    {
        $this->name = $name;
        $this->content = $content;
        $this->id = $id;
    }

    public function create()
    {
        $query = "INSERT INTO `news` SET `name` = '{$this->name}', `content` ='{$this->content}'";
        $db = \Service\DBService::getInstance();
        $db->set_charset('utf8');
        $db->query($query);
        $this->id = $db->insert_id;
    }

    public static function getNews()
    {
        return \Service\DBService::getInstance()->query("SELECT * FROM `news` ORDER BY `created_at`")->fetch_all(MYSQLI_ASSOC);
    }

    public static function getNewsnewtoold($order = "DESC")
    {
        return \Service\DBService::getInstance()->query("SELECT * FROM `news` ORDER BY `created_at` $order")->fetch_all(MYSQLI_ASSOC);
    }
    public static function getNewsabc()
    {
        return \Service\DBService::getInstance()->query("SELECT * FROM `news` ORDER BY `name`")->fetch_all(MYSQLI_ASSOC);
    }


    public static function getLAstNewsId()
    {
        return $a = \Service\DBService::getInstance()->query("SELECT * FROM `news` ORDER BY `created_at` DESC")->fetch_all(MYSQLI_ASSOC);
    }

    public static function findById($id)
    {
        return \Service\DBService::getInstance()->query("SELECT * FROM `news` WHERE `id`= $id")->fetch_assoc();

    }
}