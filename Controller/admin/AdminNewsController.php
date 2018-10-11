<?php
/**
 * Created by PhpStorm.
 * User: Egor
 * Date: 11.10.2018
 * Time: 12:27
 */

class AdminNewsController
{
public function index()
{
    global $smarty;
    $smarty->assign('news',NewsModel::getNews());
    $smarty->display("admin_news.tpl");

}
    public function newtoold()
    {
        global $smarty;
        $smarty->assign('news',NewsModel::getNewsnewtoold());
        $smarty->display('admin_news.tpl');
    }
    public function abc()
    {
        global $smarty;
        $smarty->assign('news',NewsModel::getNewsabc());
        $smarty->display('admin_news.tpl');
    }
}