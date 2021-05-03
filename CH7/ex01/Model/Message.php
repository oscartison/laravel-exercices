<?php
require_once 'Model.php';
class Message extends Model
{

    public function getAllMessages()
    {
        $sql = "SELECT Message.msg_date, Author.name, Message.title, Message.id id"
            . " FROM Message JOIN Author"
            . " WHERE Message.author = Author.id"
            . " ORDER BY msg_date DESC";
        return $this->executeRequest($sql);
    }

    public function getMessageDetail()
    {
        $sql = "SELECT Message.id, Message.content, Message.title, Message.msg_date"
        . " FROM Message"
        . " WHERE Message.id = ?";
        return $this->executeRequest($sql,[$_GET['id']]);
    }
}
