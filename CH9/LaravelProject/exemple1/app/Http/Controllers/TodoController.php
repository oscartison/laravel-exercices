<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddTodo;


use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller {
    public function index() {
            // Plus tard, on ira chercher l'info dans une BD
            $todos = Todo::findAll();
            return view('todo', compact("todos"));
    }

    public function show($id) {
        $todo = Todo::getInfo($id);
        if (!$todo) {
            abort(404);
        }
        return view('todoInfo', compact("todo"));
    }

}