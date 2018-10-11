<?php
/**
 * Created by PhpStorm.
 * User: Egor
 * Date: 11.10.2018
 * Time: 15:49
 */

class FilesController
{
    public function show()
    {
        global $params;
        $path = "News/pictures/".$params[0].".jpg";
        if (file_exists($path)) {
            header("Content-Type: image/jpg");
            die(file_get_contents($path));
        }
        header("Content-Type: image/png");
        die(file_get_contents("News/pictures/"."nopicture.png"));
    }
}