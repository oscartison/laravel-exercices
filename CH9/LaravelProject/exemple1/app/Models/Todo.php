<?php

namespace App\Models;

class Todo
{
    public static function findAll()
    {
        $todos =  \DB::select("select * from todos");
        return $todos;
    }

    public static function getInfo($id)
    {
        $todos =  \DB::select("select * from todos where id = :id", ["id" => $id]);
        return $todos;
    }
}
