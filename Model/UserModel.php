<?php


use \Service\DBService as DBService;
use \Service\SessionService as SessionService;

class UserModel
{

    private $login;
    private $pass;
    private $id;
    private $role;

    public function __construct($login, $pass, $id = null, $role = 0)
    {
        $this->login = $login;
        $this->pass = ($id) ? $pass : md5($pass);
        $this->role = $role;
        $this->id = $id;
    }

    public static function getUserByLogin($login)
    {
        $query = "SELECT * FROM `users` WHERE `login` = '$login' LIMIT 1";
        $user = DBService::getInstance()->query($query)->fetch_assoc();
        return !$user ? null : new self($login, $user['pass'], $user['id'], $user['role']);
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function save()
    {
        return $this->id ? $this->update() : $this->create();
    }


    public function toArray()
    {
        return [
            'login' => $this->login,
            'pass' =>$this->pass,
            'id' => $this->id,
            'role' => $this->role
        ];
    }

}