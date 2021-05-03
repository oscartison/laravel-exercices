<?php
require "Controller/Action.php";
$action = isset($_GET["action"]) ? $_GET["action"] : "allMessages";

try {
    if(function_exists($action)) {
        $action();
    } else {
        require "View/Error.php";
    }
} catch (PDOException $e) {
    require "View/Error.php";
}
