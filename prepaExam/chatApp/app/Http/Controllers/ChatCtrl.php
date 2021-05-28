<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckMessage;
use App\Models\Chat;


class ChatCtrl extends Controller
{

    public function index()
    {
        $channels = Chat::getChannels();
        return view('index', compact('channels'));
    }

    public function chatPage($chatRoomId, $login)
    {
        $channel = Chat::getChannel($chatRoomId);
        return view('chat', compact('channel'));
    }

    public function show()
    {
        $channels = Chat::getChannels();
        return response()->json($channels);
    }

    public static function param($chatRoomId)
    {
        $messages = Chat::getMessages($chatRoomId);
        return response()->json($messages);
    }

    public static function store($chatRoomId, $request)
    {
        try {
            Chat::insert($request["login"], $request, $chatRoomId);
        } catch (Exception $e) {
            return response()->json(false, 500);
        }
        return response()->json(true, 201);
    }
}
