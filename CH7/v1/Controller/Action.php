<?php
    require_once "Model/Message.php";


function allMessages()
{
    $message = new Message();
    $messages = $message->getAllMessages();
    require "View/View.php";
}
