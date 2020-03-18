<?php

namespace Brian\Blog\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=bdd_posts;charset=utf8', '', );
        return $db;
    }
}
