<?php

class MainController
{
    public function index()
    {
        global $smarty;
        $smarty->assign('news',NewsModel::getNews());
        $smarty->display('index.tpl');
    }
    public function newtoold()
    {
        global $smarty;
        $smarty->assign('news',NewsModel::getNewsnewtoold());
        $smarty->display('index.tpl');
    }
    public function abc()
    {
        global $smarty;
        $smarty->assign('news',NewsModel::getNewsabc());
        $smarty->display('index.tpl');
    }
}