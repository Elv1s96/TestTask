<?php
/**
 * Created by PhpStorm.
 * User: Egor
 * Date: 11.10.2018
 * Time: 12:32
 */

class AdminControlController
{
    public function index()
    {
        global $smarty;
        $smarty->display("admin_control.tpl");
    }
    public function create()
    {
        //var_dump($_POST['news_name']);
        //var_dump($_POST['content']);
        $news= new NewsModel($_POST['news_name'],$_POST['content']);
        //var_dump($news);
        $news->create();
        var_dump($news);
        echo "<br>";
        //var_dump($_FILES);
        if (isset($_FILES['picture'])) {
            //echo "файл найден";
            $id=NewsModel::getLAstNewsId();
            move_uploaded_file($_FILES['picture']['tmp_name'], "News/pictures/".$id[0]["id"].".jpg");
        }
        header("Location: /admin/control");
    }
    public function check()
    {
        $test = NewsModel::getLAstNewsId();
        var_dump($test);
        print_r($test[0]["id"]);
    }
    public function remove()
    {
        global $params;
        $del = RemoveModel::findById($params[0]);
        $del->remove($params[0]);
        header("Location: /admin/news");
    }
}
