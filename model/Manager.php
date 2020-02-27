<?php

namespace OpenClassrooms\Blog\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=bdd_posts;charset=utf8', 'root', 1234);
        return $db;
    }
}
