<?php

abstract class Model
{
    protected function executeRequest($sql)
    {
        $db = new PDO(
            "mysql:host=localhost;dbname=ValvesDB;charset=utf8",
            "webii",
            "esi",
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
        return $db->query($sql);
    }
}
