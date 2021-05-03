<?php

require_once "Model.php";

class Message extends Model
{

    public function getAllMessages()
    {

    $sql = "SELECT title, msg_date, Author.name, Message.id id 
    FROM Message 
    join Author on Message.author = Author.id
     order by msg_date";

        return $this->executeRequest($sql);
    }
}
