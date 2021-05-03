<?php
require 'Model/Message.php';

function allMessages() {
    // Pas de paramètre supplémentaire ici
    $message = new Message();
    $allMessages = $message->getAllMessages();
    require "View/AllMessages.php";
}

function messageDetail() {
    $message = new Message();
    $detailMessage = $message->getMessageDetail();
    require "View/messageDetail.php";
}