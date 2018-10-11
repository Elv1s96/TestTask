<?php

use \Service\SessionService as SessionService;

class AuthController
{
    public function index()
    {
        $this->login();
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            global $smarty;
            $smarty->display('login.tpl');
            return;
        }
        global $session;
        $user = UserModel::getUserByLogin($_POST['login']);
        if (($_POST['pass']) !== $user->getPass()) {
            throw new Exception("user not found!");
        }

        $session->set('user', $user->toArray());
        header("Location: /");
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            global $smarty;
            $smarty->display('register.tpl');
            return;
        }

        $user = new UserModel($_POST['login'], $_POST['pass']);
        $res = $user->save();
        if(!$res) {
            die("CREATING ERROR");
        }

        header("Location: /");

    }

    public function logout()
    {
        global $session;
        $session->remove('user');
        header("Location: /");
    }
}